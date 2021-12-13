@extends('client.template.form')
@section('title_page','Checkout')
@section('private_link')
<meta name="csrf-token" content="{{ csrf_token() }}" />
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
            <div class="wrap-address-billing">
                <h3 class="box-title">Địa Chỉ Thanh Toán</h3>
                <form action="#" method="get" name="formOrder" id="formOrder">                    
                    <p class="row-in-form">
                        <label for="fname">Họ Và Tên<span>*</span></label>
                        <input id="name" type="text" name="name" value="" placeholder="Họ và tên quý khách ...">
                        <span class="error name_error"></span>
                    </p>
                    <p class="row-in-form">
                        <label for="email">Địa Chỉ Email:<span>*</span></label>
                        <input id="email" type="email" name="email" value="" placeholder="Email của quý khách ... ">
                        <span class="error email_error"></span>
                    </p>
                    <p class="row-in-form">
                        <label for="phone">Số Điện Thoại<span>*</span></label>
                        <input id="phone" type="number" name="phone" value="" placeholder="Số điện thoại của quý khách ..">
                        <span class="error phone_error"></span>
                    </p>
                    <p class="row-in-form">
                        <label for="add">Tỉnh:<span>*</span></label>
                        <input type="text" list="listProvinces" id="province" type="text" name="province"
                            placeholder="Tỉnh thành của quý khách ..." />
                        <datalist id="listProvinces">
                        </datalist>
                        <span class="error province_error"></span>
                    </p>
                    <p class="row-in-form">
                        <label for="add">Huyện:<span>*</span></label>
                        <input type="text" list="districts" id="district" type="text" name="district"
                            placeholder="Huyện của quý khách ..." />
                        <datalist id="districts">
                        </datalist>
                        <span class="error district_error"></span>
                    </p>
                    <p class="row-in-form">
                        <label for="add">Xã:<span>*</span></label>
                        <input type="text" list="wards" id="ward" type="text" name="ward" placeholder="Xã của quý khách ..." />
                        <datalist id="wards">
                        </datalist>
                        <span class="error ward_error"></span>
                    </p>     
                    <p class="row-in-form">
                        <label for="address_detail">Địa Chỉ Chi Tiết: </label>
                        <input id="address_detail" type="text" name="address_detail" value=""
                            placeholder="Địa chỉ cụ thể của quý khách ... ">
                    </p>
                    <p class="row-in-form">
                        <label for="comment">Ghi Chú:</label>
                        <input id="comment" type="text" name="comment" value="" placeholder="Ghi chú của quý khách ...">
                    </p>
                    <p class="row-in-form fill-wife">
                        <label class="checkbox-field">
                            <input name="create-account" id="create-account" value="forever" type="checkbox">
                            <span>quý khách Muốn Tạo Tài Khoản?</span>
                        </label>
                        <label class="checkbox-field">
                            <input name="different-add" id="different-add" value="forever" type="checkbox">
                            <span>quý khách muốn gửi đến một địa chỉ khác?</span>
                        </label>
                    </p>
                </form>
            </div>
            <div class="summary summary-checkout">
                <div class="summary-item payment-method">
                    <h4 class="title-box">PHƯƠNG THỨC THANH TOÁN</h4>
                    <p class="summary-info"><span class="title">Chọn phương thức thanh toán của quý khách</span></p>
                    <p class="summary-info"><span class="title">COD / Paypal</span></p>
                    <div class="choose-payment-methods">
                        <label class="payment-method">
                            <input name="payment-method" id="payment-method-paypal" value="paypal" type="radio">
                            <span>Paypal</span>
                            <span class="payment-desc">quý khách có thể thanh toán bằng tài khoản paypal của mình!</span>
                        </label>
                        <label class="payment-method">
                            <input name="payment-method" id="payment-method-paypal" value="cod" type="radio"
                                checked="checked">
                            <span>COD</span>
                            <span class="payment-desc">quý khách có thể thanh toán khi nhận hàng!</span>
                        </label>
                    </div>
                    <p class="summary-info grand-total"><span>Tổng Cộng: </span> <span id="grand-total-price"></span></p>
                    <a href="" class="btn btn-medium" id='btnCod'>Đặt Hàng Ngay Bây giờ</a>
                    <a href="" class="btn btn-medium" id="btnPlaceOrder" style="display: none"></a>
                </div>
                <div class="summary-item shipping-method">              
                    <h4 class="title-box">MÃ GIẢM GIÁ</h4>
                    <p class="row-in-form">                       
                        <input id="coupon-code" type="text" name="coupon-code" value="" placeholder="Nhập mã giảm giá">
                    </p>
                    <a href="#" class="btn btn-small">Áp Dụng</a>
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
                                    <figure><img src="assets/images/products/digital_04.jpg" width="214" height="214"
                                            alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item new-label">new</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                        [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                            </div>
                        </div>
                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="assets/images/products/digital_17.jpg" width="214" height="214"
                                            alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item sale-label">sale</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                        [White]</span></a>
                                <div class="wrap-price">
                                    <ins>
                                        <p class="product-price">$168.00</p>
                                    </ins>
                                    <del>
                                        <p class="product-price">$250.00</p>
                                    </del>
                                </div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="assets/images/products/digital_15.jpg" width="214" height="214"
                                            alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
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
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                        [White]</span></a>
                                <div class="wrap-price">
                                    <ins>
                                        <p class="product-price">$168.00</p>
                                    </ins>
                                    <del>
                                        <p class="product-price">$250.00</p>
                                    </del>
                                </div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="assets/images/products/digital_01.jpg" width="214" height="214"
                                            alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item bestseller-label">Bestseller</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                        [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="assets/images/products/digital_21.jpg" width="214" height="214"
                                            alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                        [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="assets/images/products/digital_03.jpg" width="214" height="214"
                                            alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item sale-label">sale</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                        [White]</span></a>
                                <div class="wrap-price">
                                    <ins>
                                        <p class="product-price">$168.00</p>
                                    </ins>
                                    <del>
                                        <p class="product-price">$250.00</p>
                                    </del>
                                </div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="assets/images/products/digital_04.jpg" width="214" height="214"
                                            alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item new-label">new</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                        [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="assets/images/products/digital_05.jpg" width="214" height="214"
                                            alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item bestseller-label">Bestseller</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                        [White]</span></a>
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
<script src="/dist/js/pages/client/address.js"></script>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="/dist/js/pages/client/checkout.js"></script>
<script>
    $(document).ready(function () {
        $('body').addClass('checkout page');
    });
</script>
@endsection