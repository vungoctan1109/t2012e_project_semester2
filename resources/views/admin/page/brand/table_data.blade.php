@extends('admin.template.master_layout')
@section('link_private')
    <link rel="stylesheet" href="/dist/css/admin_pages/table_data.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection
@section('page-title','Admin | Table')
@section('breadcrumb')
    <div class="col-sm-6">
        <h1 class="m-0">Brand</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Brand / List </li>
        </ol>
    </div><!-- /.col -->
@endSection


@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Table</h3>
                </div>

                <div class="card-header">
                    <form action="" name="formFilter" id="formFilter" method="POST">
                        {{csrf_field ()}}
                        <div class="row">
                            <div class="col-md-2 m-3">
                                <label for="pagination_limit">Show</label>
                                <select class="form-control" name="pagination_limit" id="pagination_limit">
                                    <option value="limit_12" selected>Default litmit 12</option>
                                    <option value="limit_24">Litmit 24</option>
                                    <option value="limit_48">Litmit 48</option>
                                    <option value="limit_96">Litmit 96</option>
                                    <option value="limit_198">Litmit 198</option>
                                </select>
                            </div>
                            {{-- <div class="col-md-2 m-3">
                                <label for="product_id">Search by id</label>
                                <input type="number" class="form-control" id="product_id" placeholder="Id..."
                                    name="product_id">
                            </div> --}}
                            <div class="col-md-2 m-3">
                                <label for="name">Search by Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Name brand..."
                                       name="name">
                            </div>
                            <div class="col-md-2 m-3">
                                <label for="sortBy">Sort by </label>
                                <select class="form-control" name="sortBy">
                                    <option value="created_at_desc">Default created At (DESC)</option>
                                    <option value="created_at_asc">Created At (ASC)</option>
                                    {{-- <option value="price_desc">Price(DESC)</option>
                                    <option value="price_asc">Price(ASC)</option> --}}
                                    <option value="name_desc">Name (DESC)</option>
                                    <option value="name_asc">Name (ASC)</option>
                                    <option value="id_desc">ID (DESC)</option>
                                    <option value="id_asc">ID (ASC)</option>
                                </select>
                            </div>
                            {{-- <div class="col-md-2 m-3">
                                <label for="status_product">Filter by status</label>
                                <select class="form-control" name="status_product" id="status_product">
                                    <option value="-1">All</option>
                                    <option value="1">In Stock</option>
                                    <option value="2">Preorder</option>
                                    <option value="3">Out of stock</option>
                                    <option value="4">Expiration date</option>
                                </select>
                            </div> --}}
                            {{-- <div class="col-md-2 m-3">
                                <label for="category_id">Filter by Category</label>
                                <select class="form-control" name="category_id" id="category_id">
                                    <option value="-1">All</option>
                                </select>
                            </div> --}}
                        </div>

                        {{-- <div class="row">
                            <div class="col-md-2 m-3">
                                <label for="filterByPrice">Min by Price</label>
                                <input type="number" class="form-control" id="minPrice" placeholder="Min price..."
                                    name="minPrice">
                            </div>
                            <div class="col-md-2 m-3">
                                <label for="filterByPrice">Max by Price</label>
                                <input type="number" class="form-control" id="maxPrice" placeholder="Max price..."
                                    name="maxPrice">
                            </div>
                            <div class="col-md-2 m-3">
                                <label for="startCreate">Start date</label>
                                <input type="date" class="form-control" id="startCreate" name="startCreate">
                            </div>
                            <div class="col-md-2 m-3">
                                <label for="endCreate">End date</label>
                                <input type="date" class="form-control" id="endCreate" name="endCreate">
                            </div>
                        </div> --}}
                        <div class="row">
                            <div class="col-md-2 m-3">
                                <button type="submit" class="btn btn-block btn-primary btn-lg"
                                        id="filterSubmit">Filter</button>
                            </div>
                            <div class="col-md-2 m-3">
                                <button type="reset" class="btn btn-block btn-secondary btn-lg"
                                        id="resetFilter">Refresh</button>
                            </div>
                        </div>
                    </form>
                </div>


                <!-- /.card-header -->
                <div class="card-body" id="data_table">
                    @include('admin.page.brand.render_table')
                </div>
            </div>
        </div>
        @endSection
        @section('script_private')
            <script src="/dist/js/pages/brand/table_data.js"></script>
        @endSection

