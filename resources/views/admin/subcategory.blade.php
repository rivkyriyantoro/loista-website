@extends('layouts.master.body')
@section('title', 'Sub-Category')
@include('js.xhr')
@section('content')
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Sub-Category</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Sub-Category</h6>
                    <a href="#" data-toggle="modal" data-target="#inputModal"
                        class="btn btn-success btn-icon-split ml-auto">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                    </a>
                    <a href="/exportexcel" class="btn btn-warning btn-icon-split ml-2">
                        <span class="icon text-white-50">
                            <i class="fas fa-download"></i>
                        </span>
                    </a>
                    <a href="#" class="btn btn-info btn-icon-split ml-2" data-toggle="modal"
                        data-target="#importModal">
                        <span class="icon text-white-50">
                            <i class="fas fa-upload"></i>
                        </span>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="subCategoryList" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Category</th>
                                    <th>Sub-Category</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- modal input --}}
            <div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document"> <!-- Added modal-lg for larger width -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Input Sub-Category</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name_subcategory">Name Sub-Category</label>
                                <input type="text" class="form-control" id="name_subcategory" name="name_subcategory">
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="form-group">
                                <label for="id_category">Category</label>
                                <select class="form-control" style="width: 100%;" id="id_category" name="id_category">
                                    <!-- Option akan dimuat oleh Select2 --></select>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="form-group">
                                <label for="image_subcategory">Gambar</label>
                                <input type="file" class="form-control" id="image_subcategory" name="image_subcategory">
                                <div class="invalid-feedback"></div>
                                <img id="croppedPreview" src="" style="width: 100%; display: none;"
                                    alt="Cropped Image Preview">

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" id="save_btn" value="Save" type="button"
                                onclick="tambah()">Save</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Modal crop image --}}
            <div class="modal fade" id="cropModal" tabindex="-1" role="dialog" aria-labelledby="cropModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document"> <!-- Use modal-xl for extra width -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="cropModalLabel">Crop Image</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <div class="crop-container">
                                <input type="hidden" id="cropped_image_data" name="cropped_image_data">
                                <img id="imagePreview" src="" alt="Image to crop" class="img-crop">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" id="save_crop" class="btn btn-primary">Save Crop</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Sub-Category</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="e_id">
                            <div class="form-group">
                                <label for="e_name_subcategory">Name Sub-Category</label>
                                <input type="text" class="form-control" id="e_name_subcategory"
                                    name="e_name_subcategory">
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="form-group">
                                <label for="id_category">Category</label>
                                <select class="form-control" style="width: 100%;" id="e_id_category"
                                    name="e_id_category">
                                    <!-- Option akan dimuat oleh Select2 --></select>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="form-group">
                                <label for="e_image_subcategory">Gambar</label>
                                <input type="file" class="form-control" id="e_image_subcategory"
                                    name="e_image_subcategory">
                                <div class="invalid-feedback"></div>
                                <img id="preview" src="" style="width: 100%; padding-top:3%;"
                                    alt="preview image" hidden>
                                <img id="e_preview" src="" style="width: 100%; padding-top:3%;"
                                    alt="preview image" hidden>
                                <img id="editcroppedPreview" src="" style="width: 100%; display: none;"
                                    alt="Cropped Image Preview">

                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <button class="btn btn-primary" id="edit_save_btn" value="Save" type="button"
                                    onclick="ubah()">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="editcropModal" tabindex="-1" role="dialog" aria-labelledby="cropModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document"> <!-- Use modal-xl for extra width -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editcropModalLabel">Crop Image</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <div class="crop-container">
                                <input type="hidden" id="e_cropped_image_data" name="e_cropped_image_data">
                                <img id="editimagePreview" src="" alt="Image to crop" class="img-crop">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" id="edit_save_crop" class="btn btn-primary">Save Crop</button>
                        </div>
                    </div>
                </div>
            </div>


            {{-- <div class="modal fade" id="importModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Upload Product File</h1>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form id="importForm">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="file" class="form-control" id="importFile" name="importFile" required>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Import</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}

        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
@endsection
@push('js')
    <script>
        var table;
        var cropper;
        let tempData = {};

        $(document).ready(function() {
            table = $('#subCategoryList').DataTable({
                processing: true,
                serverSide: true,
                stateSave: true,
                searchDelay: 1000,
                ajax: {
                    url: "/subcategory/data", // Pastikan URL sudah benar
                    dataSrc: 'data', // Ambil data dari response JSON
                    statusCode: {
                        404: function() {
                            alert('Data not found');
                        }
                    }
                },
                order: [
                    [2, 'asc']
                ],
                columnDefs: [{
                    width: "1%",
                    targets: 0
                }, {
                    width: "10%",
                    targets: 1
                }, {
                    width: "15%",
                    targets: 2
                }, {
                    width: "10%",
                    targets: 4
                }],
                columns: [{
                        data: 'DT_RowIndex', // Menampilkan index
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'name_category', // Menampilkan nama kategori
                        name: 'categories.name_category' // Nama kolom di DataTable, tetapi tidak akan diurutkan oleh SQL
                    },
                    {
                        data: 'name_subcategory', // Menampilkan nama subcategory
                        name: 'name_subcategory'
                    },
                    {
                        data: 'image_subcategory', // Menampilkan gambar subcategory
                        name: 'image_subcategory',
                        render: function(data, type, row) {
                            return `<img src="/images/subcategory/${data}" width="50%" alt="Gambar">`;
                        }
                    },
                    {
                        data: null, // Kolom untuk aksi
                        orderable: false,
                        searchable: false,
                        render: function(pcs, type, row) {
                            return `<button data-toggle="modal" data-target="#editModal" class="btn btn-icon btn-success me-1 mb-2"
                    data-id="${pcs.id_subcategory}" data-name="${pcs.name_subcategory}" data-category="${pcs.id_category}"
                    data-namecategory="${pcs.name_category}" data-gambar="${pcs.image_subcategory}">
                    <span class="icon text-white-50">
                        <i class="fas fa-edit"></i>
                    </span>
                </button>
                <button type="button" class="btn btn-icon btn-danger me-1 mb-2" title="Hapus" onclick="confirmIt('Yakin ingin hapus product ?', () => hapus('` +
                                pcs.id_subcategory + `'))">
                    <span class="icon text-white-50">
                        <i class="fas fa-trash"></i>
                    </span>
                </button>
                `;
                        }
                    }
                ]
            });

            $('#image_subcategory').on('change', function(event) {
                const reader = new FileReader();
                const file = event.target.files[0];

                reader.onload = function(e) {
                    // Show the image in the crop modal
                    $('#imagePreview').attr('src', e.target.result).show();
                    $('#cropModal').modal('show'); // Show the crop modal
                    $('#inputModal').modal('hide');

                    // Initialize cropper
                    const image = document.getElementById('imagePreview');
                    if (cropper) {
                        cropper.destroy(); // Destroy previous cropper instance if it exists
                    }
                    cropper = new Cropper(image, {
                        aspectRatio: 1164 / 372, // Fixed aspect ratio (width:height)
                        viewMode: 1, // Ensure the image is fully visible in the container
                        responsive: true,
                        zoomable: true,
                        rotatable: false,
                        scalable: false,
                        dragMode: 'move',
                        minContainerWidth: 800, // Minimum width of the container
                        minContainerHeight: 400, // Minimum height of the container
                        ready() {
                            // Dynamically adjust crop box size based on container dimensions
                            const containerData = cropper.getContainerData();
                            const cropBoxData = cropper.getCropBoxData();

                            const cropWidth = Math.min(containerData.width, 1164);
                            const cropHeight = cropWidth / (1164 / 372);

                            cropper.setCropBoxData({
                                left: (containerData.width - cropWidth) / 2,
                                top: (containerData.height - cropHeight) / 2,
                                width: cropWidth,
                                height: cropHeight,
                            });
                        },
                    });
                };

                if (file) {
                    reader.readAsDataURL(file);
                }
            });


            // Save cropped image
            $('#save_crop').on('click', function() {
                if (!cropper) {
                    alert('Please select an image to crop first.');
                    return;
                }

                var canvas = cropper.getCroppedCanvas();
                if (!canvas) {
                    alert('Cropper did not generate a canvas.');
                    return;
                }

                var croppedImage = canvas.toDataURL('image/png'); // Convert cropped canvas to base64

                // Set the base64 image data to the hidden input field
                $('#cropped_image_data').val(
                    croppedImage); // Hidden input where the cropped image data will be stored
                $('#croppedPreview').attr('src', croppedImage).show();
                // Hide the crop modal
                $('#cropModal').modal('hide');
                $('#inputModal').modal('show');

            });

            // Form submission logic
            $('#save_btn').on('click', function() {
                const croppedImageData = $('#cropped_image_data')
                    .val(); // Get the base64 data from the hidden field
            });


            // crop untuk edit
            $('#e_image_subcategory').on('change', function(event) {
                const reader = new FileReader();
                const file = event.target.files[0];

                // Simpan nilai inputan lain ke variabel tempData sebelum modal crop ditampilkan
                tempData = {
                    id_subcategory: $('#e_id').val().trim(),
                    name_subcategory: $('#e_name_subcategory').val().trim(),
                    category_id: $('#e_id_category').val(),
                };
                console.log(tempData);

                reader.onload = function(e) {
                    // Tampilkan gambar di crop modal
                    $('#editimagePreview').attr('src', e.target.result).show();
                    $('#editcropModal').modal('show'); // Tampilkan modal crop
                    // $('#editModal').modal('hide'); // Sembunyikan modal edit

                    // Inisialisasi cropper
                    const image = document.getElementById('editimagePreview');
                    if (cropper) {
                        cropper.destroy(); // Hapus instance cropper sebelumnya jika ada
                    }
                    cropper = new Cropper(image, {
                        aspectRatio: 1164 / 372, // Fixed aspect ratio (width:height)
                        viewMode: 1, // Ensure the image is fully visible in the container
                        responsive: true,
                        zoomable: true,
                        rotatable: false,
                        scalable: false,
                        dragMode: 'move',
                        minContainerWidth: 800, // Minimum width of the container
                        minContainerHeight: 400, // Minimum height of the container
                        ready() {
                            // Dynamically adjust crop box size based on container dimensions
                            const containerData = cropper.getContainerData();
                            const cropBoxData = cropper.getCropBoxData();

                            const cropWidth = Math.min(containerData.width, 1164);
                            const cropHeight = cropWidth / (1164 / 372);

                            cropper.setCropBoxData({
                                left: (containerData.width - cropWidth) / 2,
                                top: (containerData.height - cropHeight) / 2,
                                width: cropWidth,
                                height: cropHeight,
                            });
                        },
                    });
                };

                if (file) {
                    reader.readAsDataURL(file);
                }
            });

            // Simpan hasil crop dan kembalikan ke editModal
            $('#edit_save_crop').on('click', function() {
                if (!cropper) {
                    alert('Please select an image to crop first.');
                    return;
                }

                const canvas = cropper.getCroppedCanvas();
                if (!canvas) {
                    alert('Cropper did not generate a canvas.');
                    return;
                }

                const croppedImage = canvas.toDataURL('image/png'); // Gambar hasil crop dalam format base64
                $('#e_cropped_image_data').val(croppedImage); // Simpan base64 di input hidden

                // Tampilkan hasil crop di preview
                $('#editcroppedPreview').attr('src', croppedImage).show();
                $('#e_preview').hide(); // Sembunyikan preview gambar asli jika ada

                // Sembunyikan modal crop dan tampilkan kembali modal edit
                $('#editcropModal').modal('hide');

                // Pulihkan nilai input lainnya di modal edit
                setTimeout(() => {
                    $('#e_id').val(tempData.id_subcategory || ''); // Pulihkan ID subcategory
                    $('#e_name_subcategory').val(tempData.name_subcategory ||
                        ''); // Pulihkan nama subcategory
                    $('#e_id_category').val(tempData.category_id || '').trigger(
                        'change'); // Pulihkan kategori
                    console.log("Pulihkan data setelah crop:", tempData);
                }, 300);
            });

            // Form submission logic
            $('#edit_save_btn').on('click', function() {
                const croppedImageData = $('#e_cropped_image_data')
                    .val(); // Get the base64 data from the hidden field

                // Proceed with form submission if needed (send via AJAX or normal form post)
            });


            // create preview image
            // $('#image_subcategory').on('change', function() {
            //     const reader = new FileReader();
            //     reader.onload = function(e) {
            //         $('#preview').attr('src', e.target.result);
            //         $('#preview').attr('hidden', false);
            //     }
            //     reader.readAsDataURL(this.files[0]);
            // });
            // $('#e_image_subcategory').on('change', function() {
            //     const reader = new FileReader();
            //     reader.onload = function(e) {
            //         $('#e_preview').attr('src', e.target.result);
            //         $('#e_preview').attr('hidden', false);
            //     }
            //     reader.readAsDataURL(this.files[0]);
            // })
        });

        $('#inputModal').on('shown.bs.modal', function() {
            $('#id_category').select2({
                placeholder: 'Select Category',
                // minimumInputLength: 2,
                dropdownAutoWidth: true,
                dropdownParent: $('#inputModal'),
                ajax: {
                    url: "/category/reload",
                    dataType: 'json',
                    type: 'GET',
                    delay: 250,
                    processResults: function(data) {
                        return {
                            results: data.map(function(item) {
                                return {
                                    id: item.id_category,
                                    text: item.name_category
                                };
                            })
                        };
                    },

                }
            });
        });

        function tambah() {
            const FD = new FormData();
            const fields = [{
                    id: 'name_subcategory',
                    message: 'Nama sub-Category tidak boleh kosong',
                },
                {
                    id: 'id_category',
                    message: 'Category tidak boleh kosong',
                },
                {
                    id: 'image_subcategory',
                    message: 'Gambar tidak boleh kosong',
                }
            ];

            let hasError = false;
            const name_subcategory = inputValue('name_subcategory');
            const id_category = $('#id_category').select2('data')[0];
            const image_subcategory = $('#image_subcategory')[0].files[0]; // Get the image file
            const croppedImageData = $('#cropped_image_data').val(); // Get cropped image data

            fields.forEach(function(field) {
                const value = inputValue(field.id);
                if (value === '') {
                    hasError = true;
                    showError(field.id, field.message);
                } else {
                    showError(field.id, '');
                    FD.append(field.id, value);
                }
            });

            if (hasError) {
                return false;
            }

            // Check if cropped image exists and append it
            if (croppedImageData) {
                FD.append('image_subcategory', croppedImageData); // Append the base64 image to the form data
            } else if (image_subcategory) {
                FD.append('image_subcategory', image_subcategory); // Otherwise, append the original image
            }

            FD.append('name_subcategory', name_subcategory);
            FD.append('id_category', id_category.id);
            FD.append('_token', '{{ csrf_token() }}');

            // Send the Ajax request with the form data
            sendAjaxRequest("{{ route('subcategory.store') }}", "POST", FD, function() {
                refresh(); // Reload DataTable
                $('#name_subcategory').val(''); // Clear input field
                $('#id_category').val(null).trigger('change');
                $('#inputModal').modal('hide'); // Hide modal
            });
        }


        $('#editModal').on('shown.bs.modal', function(e) {
            const button = $(e.relatedTarget);
            const modal = $(this);

            // Isi data ke input berdasarkan atribut tombol yang ditekan
            modal.find('#e_id').val(button.data('id'));
            modal.find('#e_name_subcategory').val(button.data('name'));

            // Inisialisasi Select2 untuk kategori
            $('#e_id_category').select2({
                placeholder: 'Select Category',
                dropdownParent: $('#editModal'),
                ajax: {
                    url: "/category/reload",
                    dataType: 'json',
                    type: 'GET',
                    processResults: function(data) {
                        return {
                            results: data.map(function(item) {
                                return {
                                    id: item.id_category,
                                    text: item.name_category,
                                };
                            }),
                        };
                    },
                },
            });

            const categoryID = button.data('category');
            if (categoryID) {
                var newOption = new Option(button.data('namecategory'), categoryID, true, true);
                $('#e_id_category').append(newOption).trigger('change');
            }

            const image = button.data('gambar');
            if (image) {
                modal.find('#e_preview').attr('src', `/images/subcategory/${image}`).attr('hidden', false);
            } else {
                modal.find('#e_preview').attr('hidden', true);
            }
        });

        function ubah() {
            const FD = new FormData();
            let hasError = false;
            const fields = [{
                    id: 'e_name_subcategory',
                    message: 'Nama sub-Category tidak boleh kosong',
                },
                {
                    id: 'e_id_category',
                    message: 'Category tidak boleh kosong',
                },
            ];

            fields.forEach(function(field) {
                const value = inputValue(field.id);
                if (value === '') {
                    hasError = true;
                    showError(field.id, field.message);
                } else {
                    showError(field.id, '');
                    FD.append(field.id, value);
                }
            });

            if (hasError) {
                return false;
            }
            const name_subcategory = inputValue('e_name_subcategory');
            const id_category = $('#e_id_category').select2('data')[0];
            const image_subcategory = document.getElementById('e_image_subcategory'); // Get the image file
            const croppedImageData = $('#e_cropped_image_data').val(); // Get cropped image data
            FD.append('name_subcategory', name_subcategory);
            FD.append('id_category', id_category.id);

            const gambar = image_subcategory.files.length > 0 ? image_subcategory.files[0] : null;

            // Check if cropped image exists and append it
            if (croppedImageData) {
                FD.append('e_image_subcategory', croppedImageData); // Append the base64 image to the form data
            } else if (gambar) {
                FD.append('e_image_subcategory', gambar); // Otherwise, append the original image
            }

            FD.append('_token', '{{ csrf_token() }}');

            // Send the Ajax request with the form data
            sendAjaxRequest("/subcategory/ubah/" + $('#e_id').val(), "POST", FD, function() {
                refresh(); // Reload DataTable
                $('#editModal').modal('hide'); // Hide modal
            });



        }

        function hapus(id) {
            const FD = new FormData();
            FD.append('_token', '{{ csrf_token() }}');
            sendAjaxRequest("/subcategory/hapus/" + id, "POST", FD, function() {
                refresh(); // Reload DataTable
            });
        }

        $('#editModal').on('hidden.bs.modal', function() {
            // Kosongkan semua inputan text
            $('#e_id').val('');
            $('#e_name_subcategory').val('');
            $('#e_id_category').val(null).trigger('change'); // Reset Select2
            $('#e_image_subcategory').val('');
            $('#preview').attr('src', '').attr('hidden', true); // Kosongkan preview gambar
            $('#e_preview').attr('src', '').attr('hidden', true); // Kosongkan preview gambar
            $('#editcroppedPreview').attr('src', '').hide(); // Kosongkan hasil crop
            $('#e_cropped_image_data').val(''); // Kosongkan hidden input
        });

        $('#inputModal').on('hidden.bs.modal', function() {
            // Kosongkan semua inputan text
            $('#name_subcategory').val('');
            $('#id_category').val(null).trigger('change'); // Reset Select2
        });

        function refresh() {
            table.ajax.reload(null, false);
        }
    </script>
@endpush
