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
    <h1 class="m-0">Mobile</h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Mobile / Create</li>
    </ol>
</div><!-- /.col -->
@endSection
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Mobile</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="mainForm">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control col-3" placeholder="Enter name...">
                        <span class="error name_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="brandID">Brand</label>
                        <select name="brandID" class="form-control col-2">
                            @foreach ($brands as $brand)
                            <option value="{{$brand-> id}}">{{$brand-> name}}</option>
                            @endforeach
                        </select>
                        <span class="error brandID_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="categoryID">Category</label>
                        <select name="categoryID" class="form-control col-2">
                            @foreach ($categories as $category)
                            <option value="{{$category-> id}}">{{$category-> name}}</option>
                            @endforeach
                        </select>
                        <span class="error categoryID_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" class="form-control col-2" placeholder="Enter price...">
                        <span class="error price_error"></span>
                    </div>

                    <div class="form-group">
                        <label for="color">Color</label>
                        <input type="text" name="color" class="form-control col-3" placeholder="Enter color...">
                        <span class="error color_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" name="quantity" class="form-control col-2" placeholder="Enter quantity...">
                        <span class="error quantity_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="ram">Ram</label>
                        <input type="number" name="ram" class="form-control col-2" placeholder="Enter ram...">
                        <span class="error ram_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="memory">Memory</label>
                        <input type="number" name="memory" class="form-control col-2" placeholder="Enter memory...">
                        <span class="error memory_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="pin">Pin</label>
                        <input type="number" name="pin" class="form-control col-2" placeholder="Enter pin...">
                        <span class="error pin_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="camera">Camera</label>
                        <input type="number" name="camera" class="form-control col-2" placeholder="Enter camera...">
                        <span class="error camera_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="screenSize">Screen Size</label>
                        <input type="number" name="screenSize" class="form-control col-3"
                            placeholder="Enter screen size...">
                        <span class="error screenSize_error"></span>
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
                        <label for="saleOff">Sale Off</label>
                        <input type="number" name="saleOff" class="form-control col-2" id="saleOff"
                            placeholder="Enter sale off...">
                        <span class="error saleOff_error"></span>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control col-7" rows="3"
                            placeholder="Enter description ..."></textarea>
                        <span class="error description_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="detail">Content detail</label>
                        <textarea name="detail" class="ck-editor__editable_inline" id="editor"></textarea>
                        <span class="error detail_error"></span>
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