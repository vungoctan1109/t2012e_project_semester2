@extends('client.template.form')
@section('title_page','Thank You')
@section('private_link')
@endsection
@section('main_content_page')
<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>Thank You</span></li>
            </ul>
        </div>
    </div>
    
    <div class="container pb-60">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Thank you for your order</h2>
                <p>A confirmation email was sent.</p>
                <a href="/client/page/shop" class="btn btn-submit btn-submitx">Continue Shopping</a>
            </div>
        </div>
    </div><!--end container-->

</main>
@endsection

@section('private_scripts')
<script>
    $(document).ready(function () {
        $('body').addClass('inner-page about-us');
    });
</script>
@endsection