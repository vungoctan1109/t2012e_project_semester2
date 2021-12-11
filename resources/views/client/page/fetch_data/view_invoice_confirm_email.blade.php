<div class="container">
    <h2>Invoice</h2>
    <div class="row">
        <div class="col-xs-12">
            <div class="invoice-title">
                <h3 class="pull-right">Order #{{$order -> id}}</h3>
                <input type="hidden" value="{{$order -> id}}" id="order_id">
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
                        $address = $order -> address_detail . ', ' .$order -> ward . ', ' .$order ->
                        district . ', ' .$order -> province;
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
                        @if($order -> paymentMethod == 0)
                        <strong>Payment Method: COD</strong><br>                                     
                        <strong>Checkout Status: Unpaid</strong><br>                      
                        @endif
                        @if($order -> paymentMethod == 1)
                        <strong>Payment Method: Paypal</strong><br>
                        <strong>Checkout Status: Paid</strong><br>
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
                                    <td class="text-center"><strong>Discount (%)</strong></td>
                                    <td class="text-right"><strong>Totals (VND)</strong></td>
                                </tr>
                            </thead>
                            <tbody>                                
                                @foreach ($order->order_detail as $item)
                                @php
                                $price_format = number_format($item -> quantity * ($item -> unitPrice - ($item -> unitPrice * $item ->discount)), 0,
                                '', '.');
                                $totalPrice_format = number_format($order -> totalPrice, 0, '', '.');
                                $unitPrice_format = number_format($item -> unitPrice, 0, '', '.');
                                @endphp
                                <tr>
                                    <td class="text-left">{{$item -> mobile -> name }}</td>
                                    <td class="text-center">{{$unitPrice_format}}</td>
                                    <td class="text-center">{{$item -> quantity}}</td>
                                    <td class="text-center">{{$item -> discount * 100}}</td>
                                    <td class="text-right">{{$price_format}}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td class="text-left"></td>
                                    <td class="text-center"></td>
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