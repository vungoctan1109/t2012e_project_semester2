@extends('admin.template.master_layout')
@section('page-title','Admin | Form')
@section('link_private')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <style>
        .ck-editor__editable_inline {
            min-height: 400px;
        }
    </style>
@endSection
@section('breadcrumb')
    <div class="col-sm-6">
        <h1 class="m-0">Product</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Category</li>
        </ol>
    </div><!-- /.col -->
@endSection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="" method="">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input type="text" name="name" class="form-control c" value="{{$result->name}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Category Description</label>
                            <textarea name="description" class="ck-editor__editable_inline" id="editor">
                                {{$result->description}}
                            </textarea>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endSection
@section('script_private')
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })

            .catch(error => {
                console.error(error);
            });
    </script>
@endSection
