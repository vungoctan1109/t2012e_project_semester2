@extends('client.template.form')
@section('title_page','Shopping cart')
@section('private_link')
@endsection
@section('main_content_page')
<main id="main" class="main-site">
    <div class="container">
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>login</span></li>
            </ul>
        </div>
        <div class=" main-content-area">
            <div class="wrap-iten-in-cart">
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

                    $status = session_status();
                    if($status == PHP_SESSION_NONE){
                        //There is no active session
                        session_start();
                    }else
                    if($status == PHP_SESSION_DISABLED){
                    //Sessions are not available
                    }else
                    if($status == PHP_SESSION_ACTIVE){
                    //Destroy current and start new one
                        session_destroy();
                        session_start();
                    }
                    $_SESSION['total_price'] = Cart::getTotal();
                    @endphp
                    <li class="pr-cart-item">
                        <div class="product-image">
                            <figure><img src="{{$item-> attributes-> image}}" alt=""></figure>
                        </div>
                        <div class="product-name">
                            <a class="link-to-product" href="#">{{$item-> name}}</a>
                        </div>
                        <div class="price-field produtc-price">
                            <p class="price">{{$price_format}} (VND)</p>
                        </div>
                        <div class="quantity">
                            <div class="quantity-input">
                                <input type="text" name="product-quatity" value="{{$item->quantity}}" data-max="5"
                                    pattern="[0-9]*" class="quantity_item">
                                <a class="btn btn-increase btn-quantity" href="#"></a>
                                <a class="btn btn-reduce btn-quantity" href="#"></a>
                                <input type="hidden" class="price_item" value="{{$item -> price}}">
                                <input type="hidden" name="id" class='id' value="{{$item -> id}}">
                            </div>
                        </div>
                        <div class="price-field sub-total">
                            <p class="price totalPrice">{{$total_price_format}} (VND)</p>
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

            <div class="summary">
                <div class="order-summary">
                    <h4 class="title-box">Order Summary</h4>
                    <p class="summary-info"><span class="title">Subtotal</span><b class="index"
                            id="total_bill">{{number_format(Cart::getTotal(), 0, '', '.')}} (VND)</b></p>
                    <p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b>
                    </p>
                    <p class="summary-info total-info "><span class="title">Total</span><b class="index"
                            id="total-info">{{number_format(Cart::getTotal(), 0, '', '.')}} (VND)</b></p>
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
            <div class="wrap-show-advance-info-box style-1 box-in-site">
                <h3 class="title-box">Most Viewed Products</h3>
                <div class="wrap-products">
                    <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5"
                        data-loop="false" data-nav="true" data-dots="false"
                        data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}'>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="/client-assets/assets/images/products/digital_04.jpg" width="214"
                                            height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    </figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item new-label">new</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                        Speaker [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="/client-assets/assets/images/products/digital_17.jpg" width="214"
                                            height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    </figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item sale-label">sale</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                        Speaker [White]</span></a>
                                <div class="wrap-price"><ins>
                                        <p class="product-price">$168.00</p>
                                    </ins> <del>
                                        <p class="product-price">$250.00</p>
                                    </del></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="/client-assets/assets/images/products/digital_15.jpg" width="214"
                                            height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    </figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item new-label">new</span>
                                    <span class="flash-item sale-label">sale</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                        Speaker [White]</span></a>
                                <div class="wrap-price"><ins>
                                        <p class="product-price">$168.00</p>
                                    </ins> <del>
                                        <p class="product-price">$250.00</p>
                                    </del></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="/client-assets/assets/images/products/digital_01.jpg" width="214"
                                            height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    </figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item bestseller-label">Bestseller</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                        Speaker [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="/client-assets/assets/images/products/digital_21.jpg" width="214"
                                            height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    </figure>
                                </a>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                        Speaker [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="/client-assets/assets/images/products/digital_03.jpg" width="214"
                                            height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    </figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item sale-label">sale</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                        Speaker [White]</span></a>
                                <div class="wrap-price"><ins>
                                        <p class="product-price">$168.00</p>
                                    </ins> <del>
                                        <p class="product-price">$250.00</p>
                                    </del></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="/client-assets/assets/images/products/digital_04.jpg" width="214"
                                            height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    </figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item new-label">new</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                        Speaker [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="/client-assets/assets/images/products/digital_05.jpg" width="214"
                                            height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    </figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item bestseller-label">Bestseller</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                        Speaker [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End wrap-products-->
            </div>

        </div>
        <!--end main content area-->
    </div>
    <!--end container-->

</main>
@endsection
@section('private_scripts')
<script>
    $(document).ready(function () {
        $('body').addClass('shopping-cart page');
    });
</script>
<script src="/dist/js/pages/client/cart.js"></script>
@endsection
