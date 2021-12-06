@extends('client.template.form')
@section('title_page','Thank You')
@section('private_link')
<style>
    .invoice-title h2,
    .invoice-title h3 {
        display: inline-block;
    }

    .table>tbody>tr>.no-line {
        border-top: none;
    }

    .table>thead>tr>.no-line {
        border-bottom: none;
    }

    .table>tbody>tr>.thick-line {
        border-top: 2px solid;
    }
</style>
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
                @if(isset($invoice))               
                    {!!$invoice!!}
                @endif                                             
                <h2>Thank you</h2>
                <p>A confirmation email was sent.</p>
                <a href="{{route('mobile_client.index')}}" class="btn btn-submit btn-submitx">Continue Shopping</a>
            </div>
        </div>
    </div>
    <!--end container-->

</main>
@endsection

@section('private_scripts')
<script>
    $(document).ready(function () {
    $('body').addClass('inner-page about-us');Ì

});

</script>
@endsection