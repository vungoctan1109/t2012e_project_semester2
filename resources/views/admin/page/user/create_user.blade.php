@extends('admin.template.master_layout')
@section('page-title','Admin | Form')
@section('link_private')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style>
        .error {
            color: red;
        }

        .ck-editor__editable_inline {
            min-height: 400px;
        }
    </style>

@endSection
@section('breadcrumb')
    <div class="col-sm-6">
        <h1 class="m-0">Account</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Account / Create</li>
        </ol>
    </div><!-- /.col -->
@endSection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create Account</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="mainForm">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="text" name="name" class="form-control col-3" placeholder="Enter name...">
                        </div>
                        <div class="form-group">
                            <label for="status">Account Type</label>
                            <select name="status" class="form-control col-2">
                                <option value="1">Admin</option>
                                <option value="0">Customer</option>
                            </select>
                            <span class="error stauts_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" name="name" class="form-control col-3" placeholder="Enter name...">
                        </div>
                        <div class="form-group">
                            <label for="name">Password</label>
                            <input type="text" name="name" class="form-control col-3" placeholder="Enter name...">
                        </div>
                        <div class="form-group">
                            <label for="name">Confirm Password</label>
                            <input type="text" name="name" class="form-control col-3" placeholder="Enter name...">
                        </div>
                        <div class="form-group">
                            <label for="name">Phone Number</label>
                            <input type="text" name="name" class="form-control col-3" placeholder="Enter name...">
                        </div>
                        <div class="form-group">
                            <label for="name">Address</label>
                            <input type="text" name="name" class="form-control col-3" placeholder="Enter name...">
                        </div>
                        <div class="form-group">
                            <label for="name">Description</label>
                            <input type="text" name="name" class="form-control col-3" placeholder="Enter name...">
                        </div>
                        <div class="form-group">
                            <label for="thumbnail">Thumbnail</label></br>
                            <button type="button" id="btnThumbnailLink" class="btn btn-info mt-2"
                                    value="Choose your file">Add files</button></br>
                            <div id="list-preview-image"></div></br>
                            <input id="valueUpLoad" type="text" value="" name="thumbnail" style="display: none">
                            <span class="error thumbnail_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" class="form-control col-2">
                                <option value="1">In Stock</option>
                                <option value="2">Preorder</option>
                                <option value="3">Out of stock</option>
                                <option value="4">Expiration date</option>
                            </select>
                            <span class="error stauts_error"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success" id="btn-submit">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endSection
@section('script_private')
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <script src="/dist/js/pages/mobile/create_mobile.js"></script>
@endSection
