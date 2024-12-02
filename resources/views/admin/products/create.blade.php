@extends('layouts.master.body')
@section('title', 'Product-Create')
@include('js.xhr')

@section('content')
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="card">
                <div class="card-header">
                    <h4>Create Product</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_subcategory">Sub-Category</label>
                        <select name="id_subcategory" id="id_subcategory" class="form-control select2">
                        </select>
                        <div class="invalid-feedback">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name_product">Product Name</label>
                        <input type="text" name="name_product" id="name_product" class="form-control" required>
                        <div class="invalid-feedback">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="SKU">SKU</label>
                        <input type="text" name="SKU" id="SKU" class="form-control" required>
                        <div class="invalid-feedback">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" id="price" class="form-control" required>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="image_product">Image Product</label>
                        <input type="file" name="image_product" id="image_product" class="form-control" required>
                        <div class="invalid-feedback"></div>
                        <img id="preview" src="" style="width: 10%; padding-top:3%;" alt="preview image" hidden>
                    </div>

                    <div class="form-group">
                        <label for="is_promo">Is Promo?</label>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="is_promo" name="is_promo"
                                value="0">
                            <label class="custom-control-label" for="is_promo">Promo</label>
                        </div>
                    </div>

                    <div class="form-group" id="promo_wrapper" style="display: none;">
                        <label for="promo">Promo <span>(%)</span></label>
                        <input type="number" name="promo" id="promo" class="form-control">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" rows="5" required></textarea>
                        <div class="invalid-feedback">
                            Please enter the product description.
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary" id="save_btn" value="Save" type="button"
                        onclick="tambah()">Save</button>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
@endsection

@push('js')
    <script>
        $('#id_subcategory').select2({
            placeholder: 'Select Sub-Category',
            dropdownParent: $('#content'),
            ajax: {
                url: "/subcategory/reload",
                dataType: 'json',
                type: 'GET',
                delay: 250,
                processResults: function(data) {
                    return {
                        results: data.map(function(item) {
                            return {
                                id: item.id_subcategory,
                                text: item.name_subcategory
                            };
                        })
                    };
                },
            }
        });

        $('#image_product').on('change', function() {
            const reader = new FileReader();
            reader.onload = function(e) {
                $('#preview').attr('src', e.target.result);
                $('#preview').attr('hidden', false);
            }
            reader.readAsDataURL(this.files[0]);
        });


        function tambah() {
            var FD = new FormData();
            let hasError = false;
            const fields = [{
                    id: 'id_subcategory',
                    message: 'Sub-Category tidak boleh kosong',
                },
                {
                    id: 'name_product',
                    message: 'Product Name tidak boleh kosong',
                },
                {
                    id: 'SKU',
                    message: 'SKU tidak boleh kosong',
                },
                {
                    id: 'price',
                    message: 'Price tidak boleh kosong',
                },
                {
                    id: 'description',
                    message: 'Description tidak boleh kosong',
                },
            ];

            const name_product = inputValue('name_product');
            const id_subcategory = $('#id_subcategory').select2('data')[0]; // Getting selected subcategory data
            const SKU = inputValue('SKU');
            const price = inputValue('price');
            const is_promo = $('#is_promo').prop('checked') ? 1 : 0; // Ensuring is_promo is 1 or 0 based on checkbox
            const promo = inputValue('promo');
            const image_product = $('#image_product')[0].files[0];
            const description = inputValue('description');

            console.log("Selected Sub-Category:", id_subcategory);

            // Validate other fields
            fields.forEach(function(field) {
                const value = inputValue(field.id);
                if (value === '') {
                    hasError = true;
                    showError(field.id, field.message);
                } else {
                    showError(field.id, ''); // Clear error message
                    FD.append(field.id, value);
                }
            });

            // Handle image file separately
            if (image_product) {
                FD.append('image_product', image_product);
            } else {
                FD.append('image_product', ''); // If no file selected, send empty string
            }

            // If there is any error, prevent form submission
            if (hasError) {
                return false;
            }

            // Append other fields
            FD.append('name_product', name_product);
            FD.append('id_subcategory', id_subcategory.id);
            FD.append('SKU', SKU);
            FD.append('price', price);
            FD.append('is_promo', is_promo); // Ensure is_promo is sent as integer (0 or 1)
            FD.append('description', description);
            FD.append('promo', promo);
            FD.append('_token', '{{ csrf_token() }}');

            // Send the Ajax request
            sendAjaxRequest("{{ route('product.store') }}", "POST", FD, function() {
                // After success, reset the form fields
                $('#name_product').val('');
                $('#SKU').val('');
                $('#price').val('');
                $('#is_promo').prop('checked', false);
                $('#promo').val('');
                $('#image_product').val('');
                $('#description').val('');
                $('#inputModal').modal('hide'); // Hide modal
                window.history.back();
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            const isPromoSwitch = document.getElementById('is_promo');
            const discountPriceWrapper = document.getElementById('promo_wrapper');
            const discountPriceInput = document.getElementById('promo');

            // Set default value for promo switch
            isPromoSwitch.addEventListener('change', function() {
                if (this.checked) {
                    this.value = 1; // On
                    discountPriceWrapper.style.display = 'block'; // Show discount input
                    discountPriceInput.setAttribute('required', 'true'); // Make discount required
                } else {
                    this.value = 0; // Off
                    discountPriceWrapper.style.display = 'none'; // Hide discount input
                    discountPriceInput.removeAttribute('required'); // Remove required attribute
                }
            });
        });

        function refresh() {
            table.ajax.reload(null, false);
        }
    </script>
@endpush
