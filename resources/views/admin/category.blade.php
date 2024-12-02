@extends('layouts.master.body')
@section('title', 'Category')
@include('js.xhr')
@section('content')
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Category</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Category</h6>
                    <a href="#" data-toggle="modal" data-target="#inputModal" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="categoryList" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Category</th>
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
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Input Category</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="nameCategory">Nama Category</label>
                                <input type="text" class="form-control" id="nameCategory" name="nameCategory">
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <button class="btn btn-primary" id="save_btn" value="Save" type="button"
                                    onclick="tambah()">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="e_id">
                            <div class="form-group">
                                <label for="nameCategory">Name Category</label>
                                <input type="text" class="form-control" id="e_nameCategory" name="e_nameCategory">
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <button class="btn btn-primary" id="save_btn" value="Save" type="button"
                                    onclick="ubah()">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
@endsection

@push('js')
    <script>
        var table;

        $(document).ready(function() {
            table = $('#categoryList').DataTable({
                processing: true,
                serverSide: true,
                stateSave: true,
                searchDelay: 1000,
                ajax: {
                    url: "/category/data",
                    dataSrc: 'data',
                    statusCode: {
                        404: function() {
                            alert('data not found');
                        }
                    }
                },
                order: [
                    [1, 'asc']
                ],
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'name_category',
                        name: 'name_category'
                    },
                    {
                        data: null,
                        orderable: false,
                        searchable: false,
                        render: function(pcs, type, row) {
                            return `
                    <button data-toggle="modal" data-target="#editModal" class="btn btn-icon btn-success me-1 mb-2" data-id="${pcs.id_category}" data-namecategory="${pcs.name_category}">
                        <span class="icon text-white-50">
                            <i class="fas fa-edit"></i>
                        </span>
                    </button>
                    <button type="button" class="btn btn-icon btn-danger me-1 mb-2" title="Hapus" onclick="confirmIt('Yakin ingin hapus category ?', () => hapus('` +
                                pcs.id_category + `'))">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                        </span>
                    </button>
                    `;
                        }
                    },
                ]
            });
        });

        

        function tambah() {
            const FD = new FormData();
            const fields = [{
                id: 'nameCategory',
                message: 'Nama Category tidak boleh kosong'
            }];
            let hasError = false;
            const nameCategory = inputValue('nameCategory');

            fields.forEach(function(field) {
                const value = inputValue(field.id);
                if (value === '') {
                    hasError = true;
                    showError(field.id, field.message);
                } else {
                    showError(field.id, '');
                    FD.append(field.id, value);
                }
            })

            if (hasError) {
                return false;
            }


            FD.append('nameCategory', nameCategory);
            FD.append('_token', '{{ csrf_token() }}');
            // Send the Ajax request with the form data
            sendAjaxRequest("{{ route('category.store') }}", "POST", FD, function() {
                refresh(); // Reload DataTable
                $('#nameCategory').val(''); // Clear input
                $('#inputModal').modal('hide'); // Hide modal
            });
        }

        function ubah() {
            const nameCategory = inputValue('e_nameCategory');
            const FD = new FormData();
            const fields = [{
                id: 'e_nameCategory',
                message: 'Nama Category tidak boleh kosong'
            }];
            let hasError = false;
            fields.forEach(function(field) {
                const value = inputValue(field.id);
                if (value === '') {
                    hasError = true;
                    showError(field.id, field.message);
                } else {
                    showError(field.id, '');
                    FD.append(field.id, value);
                }
            })

            if (hasError) {
                return false;
            }
            FD.append('nameCategory', nameCategory);
            FD.append('_token', '{{ csrf_token() }}');
            sendAjaxRequest("/category/ubah/" + inputValue('e_id'), "POST", FD, function() {
                refresh(); // Reload DataTable
                $('#editModal').modal('hide'); // Hide modal
            });
        }

        $('#editModal').on('show.bs.modal', function(event) {
            const button = $(event.relatedTarget);
            const modal = $(this);
            modal.find('#e_id').val(button.data('id'));
            modal.find('#e_nameCategory').val(button.data('namecategory'));
        });

        function hapus(id) {
            const FD = new FormData();
            FD.append('_token', '{{ csrf_token() }}');
            sendAjaxRequest("/category/hapus/" + id, "POST", FD, function() {
                refresh(); // Reload DataTable
            });
        }

        function refresh() {
            table.ajax.reload(null, false);
        }
    </script>
@endpush
