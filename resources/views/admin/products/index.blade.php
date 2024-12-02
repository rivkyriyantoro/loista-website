@extends('layouts.master.body')
@section('title', 'Product-Create')
@include('js.xhr')
@section('content')
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Product</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Product</h6>
                    <a href="{{ route('product.create') }}" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="productList" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Sub-Category</th>
                                    <th>Nama Product</th>
                                    <th>Harga</th>
                                    <th>Harga Diskon</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
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
        const productList = document.getElementById('productList');
        $(document).ready(function() {
            console.log('ready!');
            table = $('#productList').DataTable({
                processing: true,
                serverSide: true,
                stateSave: true,
                searchDelay: 1000,
                ajax: {
                    url: "/product/data",
                    dataSrc: function(json) {
                        console.log("Data received from server:",
                            json); // Log data yang diterima dari server
                        if (!json.data) {
                            console.error('Data tidak ditemukan atau format tidak sesuai');
                            return [];
                        }
                        return json.data; // Pastikan properti 'data' ada
                    },
                    statusCode: {
                        404: function() {
                            alert('Data not found');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("Error fetching data:", status, error);
                        console.log("Server response:", xhr.responseText);
                    }
                },
                order: [
                    [2, 'asc']
                ],
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'name_subcategory',
                        name: 'subcategories.name_subcategory'
                    },
                    {
                        data: 'name_product',
                        name: 'name_product'
                    },
                    {
                        data: 'price',
                        name: 'price'
                    },
                    {
                        data: 'discount_price',
                        name: 'discount_price'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'image_product',
                        name: 'image_product',
                        render: function(data, type, row) {
                            return `
                            <img src="/images/products/${data}" style="width: 100px; height: 100px;">
                            `;
                        }
                    },
                    {
                        data: null,
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row) {
                            return `
                            <a href="/product/ubah/${row.id_product}" class="btn btn-icon btn-success me-1 mb-2">
                                <span class="icon text-white-50">
                                    <i class="fas fa-edit"></i>
                                </span>
                            </a>
                            <button type="button" class="btn btn-icon btn-danger me-1 mb-2" title="Hapus" onclick="confirmIt('Yakin ingin hapus product ?', () => hapus('` +
                                row.id_product + `'))">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                        </span>
                    </button>
                            `;
                        }
                    }

                ]
            });
        });

        function hapus(id) {
            const FD = new FormData();
            FD.append('_token', '{{ csrf_token() }}');
            sendAjaxRequest("/product/hapus/" + id, "POST", FD, function() {
                refresh(); // Reload DataTable
            });
        }

        function refresh() {
            table.ajax.reload(null, false);
        }
    </script>
@endpush
