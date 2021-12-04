<div id="listCart">
    <div class="wrap-iten-in-cart" >
        <h3 class="box-title">Products Name</h3>
        <ul class="products-cart">
            @if (isset($cartItems) && count($cartItems) > 0)
            @foreach ($cartItems as $item)
            @if ($item->quantity != 0)
            @php
            $quantity = $item-> quantity;
            $price = $item -> price;
            $total_price = $quantity * $price;
            $total_price_format = number_format($total_price, 0, '', '.'); // 1,000,000
            $price_format = number_format($price, 0, '', '.');
            @endphp
            <li class="pr-cart-item">
                <div class="product-image">
                    <figure><img src="{{$item-> attributes-> image}}" alt=""></figure>
                </div>
                <div class="product-name">
                    <a class="link-to-product" href="#">{{$item-> name}}</a>
                </div>
                <div class="price-field produtc-price">
                    <p class="price">{{$price_format}} VND</p>
                </div>
                <div class="quantity">
                    <div class="quantity-input">
                        <input type="text" name="product-quatity" value="{{$item->quantity}}" data-max="100"
                            pattern="[0-9]*" class="quantity_item">
                        <a class="btn btn-increase btn-quantity" href="#"></a>
                        <a class="btn btn-reduce btn-quantity" href="#"></a>
                        <input type="hidden" class="price_item" value="{{$item -> price}}">
                        <input type="hidden" name="id" class='id' value="{{$item -> id}}">
                    </div>
                </div>
                <div class="price-field sub-total">
                    <p class="price totalPrice">{{$total_price_format}} VND</p>
                </div>
                <div class="delete">
                    <a href="#" class="btn btn-delete" title="">
                        <span>Delete from your cart</span>
                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                    </a>
                </div>
            </li>
            @endif
            @endforeach
            @if (Cart::getTotalQuantity() == 0)
            <li class="pr-cart-item">
                <strong>There are no products in the cart <i class="far fa-frown"></i></strong>
                </br>
                </br>
                <i class="fas fa-hand-point-right"></i>
                <a class="btn btn-primary btn-sm" href="/client/page/shop/mobile ">
                    <i class="fas fa-create">Shop now</i>
                </a>
            </li>
            @endif
            @else
            <li class="pr-cart-item">
                <strong>There are no products in the cart <i class="far fa-frown"></i></strong>
                </br>
                </br>
                <i class="fas fa-hand-point-right"></i>
                <a class="btn btn-primary btn-sm" href="/client/page/shop/mobile ">
                    <i class="fas fa-create">Shop now</i>
                </a>
            </li>
            @endif
        </ul>
    </div>
    @if( Cart::getTotalQuantity() > 0)
    <div class="summary">
        <div class="order-summary">
            <h4 class="title-box">Order Summary</h4>
            <p class="summary-info"><span class="title">Subtotal</span><b class="index"
                    id="total_bill">{{number_format(Cart::getTotal(), 0, '', '.')}} VND</b></p>
            <p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b>
            </p>
            <p class="summary-info total-info "><span class="title">Total</span><b class="index"
                    id="total-info">{{number_format(Cart::getTotal(), 0, '', '.')}} VND</b></p>
            </p>
        </div>
        <div class="checkout-info">
            <label class="checkbox-field">
                <input class="frm-input " name="have-code" id="have-code" value="" type="checkbox"><span>I
                    have promo code</span>
            </label>
            <a class="btn btn-checkout" href="{{route('client.checkout')}}">Check out</a>
            <a class="link-to-shop" href="shop.html">Continue Shopping<i class="fa fa-arrow-circle-right"
                    aria-hidden="true"></i></a>
        </div>
        <div class="update-clear">
            <a class="btn btn-clear" href="#">Clear Shopping Cart</a>
        </div>
    </div>
    @endif
</div>