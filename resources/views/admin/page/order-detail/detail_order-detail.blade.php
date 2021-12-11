@extends('admin.template.master_layout')
@section('page-title','Admin | Order Detail')
@section('link_private')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <style>
        .error {
            color: red;
        }
    </style>
@endSection

@section('breadcrumb')
    <div class="col-sm-6">
        <h1 class="m-0">Order Detail</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Order Detail/ Detail</li>
        </ol>
    </div><!-- /.col -->
@endSection

@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Order Detail</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="row">
                        <div class="col-12">
                            <h4>Order ID</h4>
                            <div class="post">
                                <p>{{$result->orderID}}</p>
                            </div>
                            <h4>Mobile ID</h4>
                            <div class="post">
                                <p>{{$result->mobileID}}</p>
                            </div>
                            <h4>Quantity </h4>
                            <div class="post">
                                <p>{{$result->quantity}}</p>
                            </div>
                            <h4>Unit Price</h4>
                            <div class="post">
                                <p>{{$result->unitPrice}}</p>
                            </div>
                            <h4>Create At</h4>
                            <div class="post">
                                <p>{{$result->created_at}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{route('order-detail.index')}}" class="btn btn-default float-right">Back to list</a>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection('content')

@section('script_private')
    <script src="/dist/js/pages/category/edit_category.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endSection
