<div class="wrap-iten-in-cart" id="listCart">
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
                    <input type="text" name="product-quatity" value="{{$item->quantity}}" data-max="5" pattern="[0-9]*"
                        class="quantity_item">
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
            <a class="btn btn-primary btn-sm" href="{{route('client.shop')}}">
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
            <a class="btn btn-primary btn-sm" href="{{route('client.shop')}}">
                <i class="fas fa-create">Shop now</i>
            </a>
        </li>
        @endif
    </ul>
</div>
