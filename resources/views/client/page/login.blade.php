@extends('client.template.form')
@section('title_page','Đăng nhập')
@section('private_link')
@endsection
@section('main_content_page')
<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>login</span></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                <div class=" main-content-area">
                    <div class="wrap-login-item ">
                        <div class="login-form form-item form-stl">
                            <form name="frm-login">
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">ĐĂNG NHẬP VÀO TÀI KHOẢN CỦA BẠN</h3>
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-login-uname">Địa Chỉ Email:</label>
                                    <input type="text" id="email" name="email" placeholder="Nhập địa chỉ email">
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-login-pass">Mật khẩu:</label>
                                    <input type="password" id="password" name="password" placeholder="************">
                                </fieldset>

                                <fieldset class="wrap-input">
                                    <label class="remember-field">
                                        <input class="frm-input " name="rememberme" id="rememberme" value="forever" type="checkbox"><span>Ghi nhớ mật khẩu</span>
                                    </label>
                                    <a class="link-function left-position" href="#" title="Forgotten password?">Quên mật khẩu?</a>
                                </fieldset>
                                <input id="btnSubmit" type="button" class="btn btn-submit" value="Đăng nhập" name="submit">
                            </form>
                        </div>
                    </div>
                </div><!--end main products area-->
            </div>
        </div><!--end row-->

    </div><!--end container-->

</main>
@endsection




@section('private_scripts')
<script>
    $(document).ready(function () {
        $('body').addClass('home-page home-01');
    });
</script>
<script src="/dist/js/pages/client/customer_login.js"></script>
@endsection
