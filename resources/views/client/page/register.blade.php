@extends('client.template.form')
@section('title_page','Register')
@section('private_link')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/dist/css/client_pages/register.css">
@endsection
@section('main_content_page')
<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>Register</span></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                <div class=" main-content-area">
                    <div class="wrap-login-item ">
                        <div class="register-form form-item ">
                            <form id="formRegis" class="form-stl" action="#" name="frm-login" method="get">
                                @csrf
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">Create an account</h3>
                                    <h4 class="form-subtitle">Personal infomation</h4>
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-reg-email">Email Address*</label>
                                    <input type="email" id="frm-reg-email" name="email" placeholder="Email address">
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="fullName">Full Name</label>
                                    <input type="text" id="fullName" name="fullName" placeholder="Full Name">
                                </fieldset>
                                <fieldset class="wrap-input item-width-in-half left-item ">
                                    <label for="frm-reg-pass">Password</label>
                                    <input type="password" id="password" name="password" placeholder="Password">
                                </fieldset>
                                <fieldset class="wrap-input item-width-in-half ">
                                    <label for="cfpassword">Confirm Password</label>
                                    <input type="password" id="cfpassword" name="cfpassword"
                                           placeholder="Confirm Password">
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" id="phone" name="phone"
                                           placeholder="Phone number">
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="address">Address</label>
                                    <input type="text" id="address" name="address" placeholder="Address">
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="description">Description</label>
                                    <input type="text" id="description" name="description" placeholder="Description">
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <button type="button" id="btnThumbnailLink" class="btn btn-info mt-1"
                                            value="Choose your file">Add Avatar</button></br>
                                    <div id="list-preview-image"></div>
                                    <input id="avatar" type="text" value="" name="avatar" style="display: none">
                                </fieldset>
                                <input type="submit" class="btn btn-sign" value="Register" name="register">
                            </form>
                        </div>
                    </div>
                </div>
                <!--end main products area-->
            </div>
        </div>
        <!--end row-->

    </div>
    <!--end container-->

</main>


@endsection


@section('private_scripts')
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://upload-widget.cloudinary.com/global/all.js" type="text/javascript"></script>
    <script src="/dist/js/pages/client/register.js"></script>
@endsection
