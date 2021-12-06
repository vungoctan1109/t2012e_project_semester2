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
                <h2>Invoice</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="invoice-title">

                                <h3 class="pull-right">Order #{{$order -> id}}</h3>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-xs-6 text-left">
                                    <address>
                                        <h5><strong>Billed To:</strong><br></h5>
                                        <b>Name: {{$order -> name}}</b><br>
                                        <b>Email: {{$order -> email}} </b><br>
                                        <b>Phone: {{$order -> phone}}</b><br>
                                        @php
                                          $address = '';
                                          if (isset($order -> address_detail)){
                                              $address = $order -> address_detail . ', ' .$order -> ward . ', ' .$order -> district . ', ' .$order -> province;
                                          }else{
                                              $address = $order -> ward . ', ' .$order -> district . ', ' .$order -> province;
                                          }
                                        @endphp
                                        <b>Address: {{$address}}</b><br>
                                    </address>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 text-left">
                                    <address>
                                        @if($order -> checkOut == 0)
                                        <strong>Payment Method: COD</strong><br>
                                        {{$order -> email}}
                                        @endif
                                        @if($order -> checkOut == 1)
                                        <strong>Payment Method: Paypal</strong><br>
                                        @endif
                                    </address>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <address>
                                        <strong>Order Date:</strong><br>
                                        {{date('d-m-Y', strtotime($order->created_at))}}<br><br>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Order summary</strong></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-condensed">
                                            <thead>
                                                <tr>
                                                    <td class="text-left"><strong>Item</strong></td>
                                                    <td class="text-center"><strong>Price (VND)</strong></td>
                                                    <td class="text-center"><strong>Quantity</strong></td>
                                                    <td class="text-right"><strong>Totals (VND)</strong></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($order_details as $item)
                                                @php
                                                 $price_format = number_format($item -> unitPrice * $item -> quantity, 0, '', '.');
                                                 $totalPrice_format = number_format($order -> totalPrice, 0, '', '.');
                                                 $unitPrice_format = number_format($item -> unitPrice, 0, '', '.');
                                                @endphp
                                                <tr>
                                                    <td class="text-left">{{$item -> mobile -> name }}</td>
                                                    <td class="text-center">{{$unitPrice_format}}</td>
                                                    <td class="text-center">{{$item -> quantity}}</td>
                                                    <td class="text-right">{{$price_format}}</td>
                                                </tr>
                                                @endforeach
                                                <tr>
                                                    <td class="text-left"></td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center"></td>
                                                    <td class="text-right">{{$totalPrice_format}}</td>
                                                </tr>
                                                <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h2>Thank you</h2>
                <p>A confirmation email was sent.</p>
                <a href="/client/page/shop" class="btn btn-submit btn-submitx">Continue Shopping</a>
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
