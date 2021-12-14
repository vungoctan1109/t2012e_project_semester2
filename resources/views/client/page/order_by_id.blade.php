@extends('client.template.form')
@section('title_page','Lịch sử mua hàng')
@section('private_link')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
@endsection
@section('main_content_page')
    <main id="main" class="main-site">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="/client/page/home" class="link">TRANG CHỦ</a></li>
                    <li class="item-link"><span>LỊCH SỬ MUA HÀNG</span></li>
                </ul>
            </div>
        </div>

        <div class="container pb-60">
            <div class="row">
                @php
                    $userFullName = \Illuminate\Support\Facades\Auth::User()->fullName;
                @endphp
                <h3><b>{{$userFullName}}</b> / Lịch sử mua hàng</h3><br>
                <div class="col-md-5" style="background-color:#e5e5e5">
                    <h3 style="color:darkred"><b>Danh sách đơn hàng: </b></h3>
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th style="text-align: center; ">ID</th>
                            <th style="text-align: center;  " scope="col">Trạng Thái</th>
                            <th style="text-align: center; " scope="col">Trạng thái thanh toán</th>
                            <th style="text-align: center; " scope="col">Tên người nhận</th>
                            <th style="text-align: center; width:30%" scope="col">Note</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order )
                            <tr>
                                <th scope="row" style="text-align: center">{{$order->id}}</th>
                                <td style="text-align: center">{{$order->strStatus}}</td>
                                <td style="text-align: center">{{$order->strCheckout}}</td>
                                <td style="text-align: center">{{$order->name}}</td>
                                <td style="text-align: center"><a id_attr='{{$order->id}}' class="a_detail_order"
                                                                  href="#">Chi tiết</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $orders->links() !!}
                    <br>
                </div>
                <div class="col-md-7" >
                    <h3 style="color:darkred"><b>Đơn hàng chi tiết:</b></h3>
                    <div id="detailOrder">
                        <h4 style="font-family: 'Georgia', sans-serif; color: dimgrey; font-style: italic">Chưa có thông tin đơn hàng chi tiết</h4><br>
                    </div>
                </div>
            </div>
            <div class="row">
                <a class="btn btn-checkout" href="/client/page/shop/mobile"><button class="btn btn-danger">Tiếp tục mua hàng</button></a>
                <a class="btn btn-checkout" href="/client/page/user/{{\Illuminate\Support\Facades\Auth::id()}}"><button class="btn btn-danger">Đi đến trang cá nhân</button></a>
            </div>
        </div>
        <!--end container-->

    </main>

@endsection


@section('private_scripts')
    <script>
        $(document).ready(function () {
            $('body').addClass('inner-page about-us');
        });
    </script>
    <script src="/dist/js/pages/client/order_by_id.js"></script>
@endsection
