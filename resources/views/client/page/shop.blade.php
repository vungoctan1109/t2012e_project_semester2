@extends('client.template.form')
@section('title_page','Shop')
@section('private_link')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="stylesheet" type="text/css" href="/client-assets/assets/css/style.css">
@endsection
@section('main_content_page')
<<<<<<< HEAD
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
                    <a href="#" class="banner-link">
                        <figure><img src="/client-assets/assets/images/shop-banner.jpg" alt=""></figure>
                    </a>
=======
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
                            <form name="formFilter2" id="formFilter">
                                {{csrf_field ()}}
                                <div class="row ">
                                    <div class="col-md-3 mt-3">
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
                                    <div class="col-md-3 mt-3">
                                        <label for="brandID">Filter by Brand</label>
                                        <select class="form-control" name="brandID" id="brandID">
                                            <option value="99" selected>---select---</option>
                                            @foreach($brands as $brand)
                                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3 mt-3">
                                        <label for="from_price">Search price from</label>
                                        <input type="number" class="form-control" id="from_price"
                                               placeholder="Min price..."
                                               name="from_price">
                                    </div>
                                    <div class="col-md-3 mt-3">
                                        <label for="to_price">Search price to</label>
                                        <input type="number" class="form-control" id="to_price"
                                               placeholder="Max price..."
                                               name="to_price">
                                    </div>
                                    <div class="col-md-3 mt-3">
                                        <label for="ram">Filter by RAM</label>
                                        <select class="form-control" name="ram" id="ram">
                                            <option value="99" selected>---select---</option>
                                            <option value="4">4 GB</option>
                                            <option value="8">8 GB</option>
                                            <option value="16">16 GB</option>
                                            <option value="32">32 GB</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mt-3">
                                        <label for="name">Search by Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="mobile's name"
                                               name="name">
                                    </div>
                                    <div class="col-md-3 mt-3">
                                        <label for="sortBy">Sort by </label>
                                        <select class="form-control" name="sortBy">
                                            <option value="price_desc">Price Descending</option>
                                            <option value="price_asc">Price Ascending</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mt-3">
                                        <label for="pagination_limit">Show</label>
                                        <select class="form-control" name="pagination_limit" id="pagination_limit">
                                            <option value="limit_9" selected>Litmit 9</option>
                                            <option value="limit_18">Litmit 18</option>
                                            <option value="limit_32">Litmit 32</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-block btn-secondary m-4"
                                                id="filterSubmit1">Find
                                        </button>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="/client/page/shop">
                                            <button type="button" class="btn btn-block btn-default m-4"
                                                    id="resetFilter">Refresh
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="wrap-shop-control">
                        <h1 class="shop-title">Digital & Electronics</h1>
                        {{--                    <div class="wrap-right">--}}
                        {{--                        <div class="sort-item orderby ">--}}
                        {{--                            <select name="orderby" class="use-chosen">--}}
                        {{--                                <option value="price_desc">Price Descending</option>--}}
                        {{--                                <option value="price_asc">Price Ascending</option>--}}
                        {{--                            </select>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="sort-item product-per-page">--}}
                        {{--                            <select name="post-per-page" class="use-chosen">--}}
                        {{--                                <option value="limit_5" selected>Litmit 5</option>--}}
                        {{--                                <option value="limit_10">Litmit 10</option>--}}
                        {{--                                <option value="limit_20">Litmit 20</option>--}}
                        {{--                            </select>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                    </div>
                    <!--end wrap shop control-->
                    <!--pagination and fetch_data-->
                    <div id="data_table">
                        @include('client.page.fetch_data.pagination_shop_mobile_data')
                    </div>
>>>>>>> 6b49d37008fdb36fda0dc86146b22fe64529a008
                </div>
                <div class="wrap-shop-control">
                    <h1 class="shop-title">Digital & Electronics</h1>
                    <div class="wrap-right">
                        <div class="sort-item orderby ">
                            <select name="orderby" class="use-chosen" id="sortBy">
                                <option value="price_desc">Price Descending</option>
                                <option value="price_asc">Price Ascending</option>
                            </select>
                        </div>
                        <div class="sort-item product-per-page">
                            <select name="post-per-page" class="use-chosen" id="pagination_limit">
                                <option value="limit_9" selected>Litmit 9</option>
                                <option value="limit_18">Litmit 18</option>
                                <option value="limit_32">Litmit 32</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!--end wrap shop control-->
                <!--pagination and fetch_data-->
                <div id="data_table">
                    @include('client.page.fetch_data.pagination_shop_mobile_data')
                </div>
            </div>
            <!--end main products area-->
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                <form action="">
                    <div class="widget mercado-widget filter-widget brand-widget">
                        <h2 class="widget-title">Brand</h2>
                        <div class="widget-content">
                            <ul class="list-style vertical-list list-limited" data-show="6">
                                <li class="list-item"><a value='-1' class="filter-link filter-brand active" href="#">Tất
                                        cả</a></li>
                                @foreach ($brands as $item)
                                <li class="list-item"><a value='{{$item -> id}}' class="filter-link filter-brand"
                                        href="#">{{$item -> name}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div><!-- brand widget-->
                    <div class="widget mercado-widget filter-widget brand-widget">
                        <h2 class="widget-title">Price</h2>
                        <div class="widget-content">
                            <ul class="list-style vertical-list list-limited">
                                <li class="list-item"><a value="-1" class="filter-link filter-price active" href="#">Tất
                                        cả</a></li>
                                <li class="list-item"><a value="1" class="filter-link filter-price" href="#">Dưới 2
                                        triệu</a></li>
                                <li class="list-item"><a value="2" class="filter-link filter-price" href="#">Từ 2 đến 4
                                        triệu</a></li>
                                <li class="list-item"><a value="3" class="filter-link filter-price" href="#">Từ 4 đến 7
                                        triệu</a></li>
                                <li class="list-item"><a value="4" class="filter-link filter-price" href="#">Từ 7 đến 13
                                        triệu</a></li>
                                <li class="list-item"><a value="5" class="filter-link filter-price" href="#">Trên 13
                                        triệu</a></li>
                            </ul>
                        </div>
                    </div><!-- price widget-->
                    <div class="widget mercado-widget filter-widget brand-widget">
                        <h2 class="widget-title">Dung lượng pin</h2>
                        <div class="widget-content">
                            <ul class="list-style vertical-list list-limited">
                                <li class="list-item"><a value="-1" class="filter-link filter-battery active"
                                        href="#">Tất cả</a></li>
                                <li class="list-item"><a value="1" class="filter-link filter-battery" href="#">Dưới 3000
                                        mah</a></li>
                                <li class="list-item"><a value="2" class="filter-link filter-battery" href="#">Từ 3000 -
                                        4000mah</a></li>
                                <li class="list-item"><a value="3" class="filter-link filter-battery" href="#">Trên
                                        4000mah</a></li>
                            </ul>
                        </div>
                    </div><!-- pin widget-->
                    <div class="widget mercado-widget filter-widget brand-widget">
                        <h2 class="widget-title">Màn hình</h2>
                        <div class="widget-content">
                            <ul class="list-style vertical-list list-limited">
                                <li class="list-item"><a value='-1' class="filter-link filter-screen active"
                                        href="#">Tất cả</a></li>
                                <li class="list-item"><a value='1' class="filter-link filter-screen" href="#">Dưới 5.0
                                        inch</a></li>
                                <li class="list-item"><a value='2' class="filter-link filter-screen" href="#">Dưới 6.0
                                        inch</a></li>
                                <li class="list-item"><a value='3' class="filter-link filter-screen" href="#">Trên 6.0
                                        inch</a></li>
                            </ul>
                        </div>
                    </div><!-- screen widget-->
                    <div class="widget mercado-widget filter-widget brand-widget">
                        <h2 class="widget-title">Ram</h2>
                        <div class="widget-content">
                            <ul class="list-style vertical-list list-limited">
                                <li class="list-item"><a value='-1' class="filter-link filter-ram active" href="#">Tất
                                        cả</a></li>
                                <li class="list-item"><a value='3' class="filter-link filter-ram" href="#">3 gb</a></li>
                                <li class="list-item"><a value='4' class="filter-link filter-ram" href="#">4 gb</a></li>
                                <li class="list-item"><a value='8' class="filter-link filter-ram" href="#">8 gb</a></li>
                                <li class="list-item"><a value='16' class="filter-link filter-ram" href="#">16 gb</a>
                                </li>
                                <li class="list-item"><a value='32' class="filter-link filter-ram" href="#">32 gb</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- ram widget-->
                    @if(isset($mobiles_recent_view) && count($mobiles_recent_view) > 0)
                    <div class="widget mercado-widget widget-product">
                        <h2 class="widget-title">Sản phẩm vừa xem</h2>
                        <div class="widget-content">
                            <ul class="products">
                                @foreach ($mobiles_recent_view as $item)
                                @php
                                $price_recent_item = number_format($item -> price, 0, '', ','); // 1,000,000
                                @endphp
                                <li class="product-item">
                                    <div class="product product-widget-style">
                                        <div class="thumbnnail">
                                            <a href="detail.html"
                                                title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                                <figure><img src="{{$item -> mainThumbnail}}" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{route('mobile_client.show', $item -> id)}}"
                                                class="product-name"><span>{{$item -> name}}</span></a>
                                            <div class="wrap-price"><span class="product-price">{{$price_recent_item}}(VND)</span></div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div><!-- recent view widget-->
                    @endIf
                </form>
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