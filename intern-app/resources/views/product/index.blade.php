@extends('layouts.app')

@section('title', 'Manajemen Produk')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Product Management</h3>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productModal">
            Add Product
        </button>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="productsTable" class="table table-striped table-hover" style="width: 100%">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>price</th>
                            <th>stock</th>
                            <th>created_at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $p)
                            <tr>
                                <td>{{ $p['id'] }}</td>
                                <td>{{ $p['name'] }}</td>
                                <td>{{ number_format($p['price'], 0, ',', '.') }}</td>
                                <td>{{ $p['stock'] }}</td>
                                <td>{{ $p['created_at'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>

    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">

            <form id="productForm" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" id="pName" class="form-control" placeholder="Product Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="number" id="pPrice" class="form-control" placeholder="Price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Stock</label>
                        <input type="number" id="pStock" class="form-control" placeholder="Stock">
                    </div>
                    <div class="modal-footer">
                        <button id="btnSaveProduct" type="button" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/product.js') }}"></script>
@endpush
