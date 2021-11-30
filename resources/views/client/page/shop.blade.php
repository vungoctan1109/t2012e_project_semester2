@extends('client.template.form')
@section('title_page','Shop')
@section('private_link')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="stylesheet" type="text/css" href="/client-assets/assets/css/style.css">
@endsection
@section('main_content_page')
<main id="main" class="main-site left-sidebar">
    <div class="container">
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>Digital & Electronics</span></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                <div class="banner-shop">
{{--                    <a href="#" class="banner-link">--}}
{{--                        <figure><img src="/client-assets/assets/images/shop-banner.jpg" alt=""></figure>--}}
{{--                    </a>--}}
                    <div class="card-header">
                        <form action="" name="formFilter" id="formFilter" method="POST">
                            {{csrf_field ()}}
                            <div class="row ">
                                <div class="col-md-4 m-3">
                                    <label for="pagination_limit">Show</label>
                                    <select class="form-control" name="pagination_limit" id="pagination_limit">
                                        <option value="limit_5" selected>Litmit 5</option>
                                        <option value="limit_10">Litmit 10</option>
                                        <option value="limit_20">Litmit 20</option>
                                    </select>
                                </div>
                                <div class="col-md-4 m-3">
                                    <label for="status">Filter by status</label>
                                    <select class="form-control" name="status" id="status">
                                        <option value="99" selected>---select---</option>
                                        <option value="-1">Out of stock</option>
                                        <option value="0">stop selling</option>
                                        <option value="1">on sale</option>
                                        <option value="2">sale off</option>
                                        <option value="3">top sale</option>
                                    </select>
                                </div>
                                <div class="col-md-4 m-3">
                                    <label for="brandID">Filter by Brand</label>
                                    <select class="form-control" name="brandID" id="brandID">
                                        <option value="99" selected>---select---</option>
{{--                                        @foreach($brands as $brand)--}}
{{--                                            <option value="{{$brand->id}}">{{$brand->name}}</option>--}}
{{--                                        @endforeach--}}
                                    </select>
                                </div>
                                <div class="col-md-4 m-3">
                                    <label for="from_price">Min by Price</label>
                                    <input type="number" class="form-control" id="from_price" placeholder="Min price..."
                                           name="from_price">
                                </div>
                                <div class="col-md-4 m-3">
                                    <label for="to_price">Max by Price</label>
                                    <input type="number" class="form-control" id="to_price" placeholder="Max price..."
                                           name="to_price">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 m-3">
                                    <button type="submit" class="btn btn-block btn-primary"
                                            id="filterSubmit">Find
                                    </button>
                                </div>
                                <div class="col-md-2 m-3">
                                    <button type="reset" class="btn btn-block btn-secondary"
                                            id="resetFilter">Refresh
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="wrap-shop-control">
                    <h1 class="shop-title">Digital & Electronics</h1>
                    <div class="wrap-right">
                        <div class="sort-item orderby ">
                            <select name="orderby" class="use-chosen">
                                <option value="created_at_desc" selected>Created At (DESC)</option>
                                <option value="created_at_asc">Created At (ASC)</option>
                                <option value="price_desc">Price(DESC)</option>
                                <option value="price_asc">Price(ASC)</option>
                                <option value="name_desc">Name (DESC)</option>
                                <option value="name_asc">Name (ASC)</option>
                                <option value="id_desc">ID (DESC)</option>
                                <option value="id_asc">ID (ASC)</option>
                            </select>
                        </div>
                        <div class="sort-item product-per-page">
                            <select name="post-per-page" class="use-chosen">
                                <option value="limit_5" selected>Litmit 5</option>
                                <option value="limit_10">Litmit 10</option>
                                <option value="limit_20">Litmit 20</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!--end wrap shop control-->
                 <!--pagination and fetch_data-->
                 @include('client.page.fetch_data.pagination_shop_mobile_data')
            </div>
            <!--end main products area-->

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                <div class="widget mercado-widget categories-widget">
                    <h2 class="widget-title">All Categories</h2>
                    <div class="widget-content">
                        <ul class="list-category">
                            <li class="category-item has-child-cate">
                                <a href="#" class="cate-link">Fashion & Accessories</a>
                                <span class="toggle-control">+</span>
                                <ul class="sub-cate">
                                    <li class="category-item"><a href="#" class="cate-link">Batteries (22)</a></li>
                                    <li class="category-item"><a href="#" class="cate-link">Headsets (16)</a></li>
                                    <li class="category-item"><a href="#" class="cate-link">Screen (28)</a></li>
                                </ul>
                            </li>
                            <li class="category-item has-child-cate">
                                <a href="#" class="cate-link">Furnitures & Home Decors</a>
                                <span class="toggle-control">+</span>
                                <ul class="sub-cate">
                                    <li class="category-item"><a href="#" class="cate-link">Batteries (22)</a></li>
                                    <li class="category-item"><a href="#" class="cate-link">Headsets (16)</a></li>
                                    <li class="category-item"><a href="#" class="cate-link">Screen (28)</a></li>
                                </ul>
                            </li>
                            <li class="category-item has-child-cate">
                                <a href="#" class="cate-link">Digital & Electronics</a>
                                <span class="toggle-control">+</span>
                                <ul class="sub-cate">
                                    <li class="category-item"><a href="#" class="cate-link">Batteries (22)</a></li>
                                    <li class="category-item"><a href="#" class="cate-link">Headsets (16)</a></li>
                                    <li class="category-item"><a href="#" class="cate-link">Screen (28)</a></li>
                                </ul>
                            </li>
                            <li class="category-item">
                                <a href="#" class="cate-link">Tools & Equipments</a>
                            </li>
                            <li class="category-item">
                                <a href="#" class="cate-link">Kid’s Toys</a>
                            </li>
                            <li class="category-item">
                                <a href="#" class="cate-link">Organics & Spa</a>
                            </li>
                        </ul>
                    </div>
                </div><!-- Categories widget-->

                <div class="widget mercado-widget filter-widget brand-widget">
                    <h2 class="widget-title">Brand</h2>
                    <div class="widget-content">
                        <ul class="list-style vertical-list list-limited" data-show="6">
                            <li class="list-item"><a class="filter-link active" href="#">Fashion Clothings</a></li>
                            <li class="list-item"><a class="filter-link " href="#">Laptop Batteries</a></li>
                            <li class="list-item"><a class="filter-link " href="#">Printer & Ink</a></li>
                            <li class="list-item"><a class="filter-link " href="#">CPUs & Prosecsors</a></li>
                            <li class="list-item"><a class="filter-link " href="#">Sound & Speaker</a></li>
                            <li class="list-item"><a class="filter-link " href="#">Shop Smartphone & Tablets</a></li>
                            <li class="list-item default-hiden"><a class="filter-link " href="#">Printer & Ink</a></li>
                            <li class="list-item default-hiden"><a class="filter-link " href="#">CPUs & Prosecsors</a>
                            </li>
                            <li class="list-item default-hiden"><a class="filter-link " href="#">Sound & Speaker</a>
                            </li>
                            <li class="list-item default-hiden"><a class="filter-link " href="#">Shop Smartphone &
                                    Tablets</a></li>
                            <li class="list-item"><a
                                    data-label='Show less<i class="fa fa-angle-up" aria-hidden="true"></i>'
                                    class="btn-control control-show-more" href="#">Show more<i class="fa fa-angle-down"
                                        aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div><!-- brand widget-->
                <div class="widget mercado-widget filter-widget price-filter">
                    <h2 class="widget-title">Price</h2>
                    <div class="widget-content">
                        <div id="slider-range"></div>
                        <p>
                            <label for="amount">Price:</label>
                            <input type="text" id="amount" readonly>
                            <button class="filter-submit">Filter</button>
                        </p>
                    </div>
                </div><!-- Price-->
                <div class="widget mercado-widget filter-widget">
                    <h2 class="widget-title">Color</h2>
                    <div class="widget-content">
                        <ul class="list-style vertical-list has-count-index" data-show="6">
                            <li class="list-item"><a class="filter-link " href="#">Red <span>(217)</span></a></li>
                            <li class="list-item"><a class="filter-link " href="#">Yellow <span>(179)</span></a></li>
                            <li class="list-item"><a class="filter-link " href="#">Black <span>(79)</span></a></li>
                            <li class="list-item"><a class="filter-link " href="#">Red <span>(217)</span></a></li>
                            <li class="list-item"><a class="filter-link " href="#">Yellow <span>(179)</span></a></li>
                            <li class="list-item"><a class="filter-link " href="#">Black <span>(79)</span></a></li>
                        </ul>
                    </div>
                </div><!-- Color -->
                <div class="widget mercado-widget filter-widget">
                    <h2 class="widget-title">Size</h2>
                    <div class="widget-content">
                        <ul class="list-style inline-round ">
                            <li class="list-item"><a class="filter-link active" href="#">s</a></li>
                            <li class="list-item"><a class="filter-link " href="#">M</a></li>
                            <li class="list-item"><a class="filter-link " href="#">l</a></li>
                            <li class="list-item"><a class="filter-link " href="#">xl</a></li>
                        </ul>
                        <div class="widget-banner">
                            <figure><img src="/client-assets/assets/images/size-banner-widget.jpg" width="270"
                                    height="331" alt="">
                            </figure>
                        </div>
                    </div>
                </div><!-- Size -->
                <div class="widget mercado-widget widget-product">
                    <h2 class="widget-title">Popular Products</h2>
                    <div class="widget-content">
                        <ul class="products">
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="detail.html"
                                            title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="/client-assets/assets/images/products/digital_01.jpg"
                                                    alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                Speaker...</span></a>
                                        <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="detail.html"
                                            title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="/client-assets/assets/images/products/digital_17.jpg"
                                                    alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                Speaker...</span></a>
                                        <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="detail.html"
                                            title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="/client-assets/assets/images/products/digital_18.jpg"
                                                    alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                Speaker...</span></a>
                                        <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="detail.html"
                                            title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="/client-assets/assets/images/products/digital_20.jpg"
                                                    alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                Speaker...</span></a>
                                        <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!-- brand widget-->
            </div>
            <!--end sitebar-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</main>
@endsection
@section('private_scripts')
<script>
    $(document).ready(function () {
        $('body').addClass('home-page home-01');
    });
</script>
<script src="/dist/js/pages/client/shopMobile.js"></script>
@endsection
