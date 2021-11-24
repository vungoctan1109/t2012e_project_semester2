@extends('admin.template.master_layout')
@section('page-title','Admin | Form')
@section('link_private')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<style>
    .ck-editor__editable_inline {
        min-height: 400px;
    }
</style>
<meta content="{{ csrf_token() }}" name="csrf-token" />
@endSection
@section('breadcrumb')
<div class="col-sm-6">
    <h1 class="m-0">Product</h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Form</li>
    </ol>
</div><!-- /.col -->
@endSection


@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="" method="">                
                <div class="card-body">                    
                    <div class="form-group">
                        <label for="email">Name</label>
                        <input type="text" name="name" class="form-control c" id="exampleInputEmail1"
                            placeholder="Enter name...">
                        <span class="error name_error" style="color: red"></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control c" id="exampleInputEmail1"
                            placeholder="Enter email">
                        <span class="error email_error" style="color: red"></span>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" id="exampleInputPassword1"
                            placeholder="Enter email">
                        <span class="error phone_error" style="color: red"></span>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" id="btn-submit">Submit</button>
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
<script type="text/javascript">
    $(document).ready(function () {

    $('#btn-submit').click(function (e) {
        e.preventDefault();
        Swal.fire({
            title: 'Do you want to save the changes?',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'Save',
            denyButtonText: `Don't save`,
            }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                var name = $('input[name="name"]').val();
                var email = $('input[name="email"]').val();
                var phone = $('input[name="phone"]').val();
                var data = {name: name, email:email, phone:phone};                
                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                }); 
                $.ajax({
                    url: '{{route('product.store')}}',
                    method: 'POST',
                    data: data,
                    beforeSend: function () {
                        $(document).find('span.error').text('');
                    },
                    success: function(response) {                       
                        if(response.status == 400) {
                            $.each(response.errors, function(prefix, val) {
                                $('span.' + prefix + '_error').text(val[0])
                            });
                        }   
                        if(response.status == 201) {
                            Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
})
                        }                                                                                            
                    }                  
                });
               
            } else if (result.isDenied) {                
                Swal.fire('Changes are not saved', '', 'info')
            }
        })
    });



});
</script>

@endSection