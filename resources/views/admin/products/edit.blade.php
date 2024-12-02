@extends('layouts.master.body')
@section('title', 'Edit Product')

@section('content')
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="card">
                <div class="card-header">
                    <h4>Edit Product</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('product.update', $product->id_product) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Sub-Category -->
                        <div class="form-group">
                            <label for="id_subcategory">Sub-Category</label>
                            <select name="id_subcategory" id="id_subcategory" class="form-control select2">
                                @foreach ($subcategories as $subcategory)
                                    <option value="{{ $subcategory->id_subcategory }}"
                                        @if ($subcategory->id_subcategory == $product->id_subcategory) selected @endif>
                                        {{ $subcategory->name_subcategory }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Product Name -->
                        <div class="form-group">
                            <label for="name_product">Product Name</label>
                            <input type="text" name="name_product" id="name_product" class="form-control"
                                value="{{ $product->name_product }}" required>
                        </div>

                        <!-- SKU -->
                        <div class="form-group">
                            <label for="SKU">SKU</label>
                            <input type="text" name="SKU" id="SKU" class="form-control"
                                value="{{ $product->SKU }}" required>
                        </div>

                        <!-- Price -->
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price" class="form-control"
                                value="{{ $product->price }}" required>
                        </div>

                        <!-- Image -->
                        <div class="form-group">
                            <label for="image_product">Image</label>
                            <input type="file" name="image_product" id="image_product" class="form-control">
                            <img id="preview" src="{{ asset('images/products/' . $product->image_product) }}"
                                style="width: 10%; padding-top: 3%;" alt="Current Image">
                            <img id="edit_preview" src="" style="width: 10%;"
                                alt="Cropped Image Preview" hidden>
                        </div>

                        <!-- Promo -->
                        <div class="form-group">
                            <label for="is_promo">Is Promo?</label>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="is_promo" name="is_promo"
                                    value="1" @if ($product->is_promo) checked @endif>
                                <label class="custom-control-label" for="is_promo">Promo</label>
                            </div>
                        </div>

                        <div class="form-group" id="promo_wrapper" style="display: none;">
                            <label for="promo">Promo (%)</label>
                            <input type="number" name="promo" id="promo" class="form-control"
                                value="{{ $product->promo }}">
                        </div>

                        <!-- Description -->
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="5" required>{{ $product->description }}</textarea>
                        </div>



                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
@endsection

@push('js')
    <script>
        $('#image_product').on('change', function() {
            const reader = new FileReader();
            reader.onload = function(e) {
                $('#edit_preview').attr('src', e.target.result);
                $('#preview').attr('hidden', true);
                $('#edit_preview').attr('hidden', false);
            }
            reader.readAsDataURL(this.files[0]);
        })

        document.addEventListener('DOMContentLoaded', function() {
            const isPromoSwitch = document.getElementById('is_promo');
            const promoWrapper = document.getElementById('promo_wrapper');
            const promoInput = document.getElementById('promo');

            // Show/hide promo field based on switch state
            if (isPromoSwitch.checked) {
                promoWrapper.style.display = 'block';
            }

            isPromoSwitch.addEventListener('change', function() {
                if (this.checked) {
                    promoWrapper.style.display = 'block';
                } else {
                    promoWrapper.style.display = 'none';
                }
            });
        });
    </script>
@endpush
