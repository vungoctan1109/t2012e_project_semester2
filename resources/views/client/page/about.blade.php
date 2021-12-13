@extends('client.template.form')
@section('title_page','About')
@section('private_link')
@endsection
@section('main_content_page')
<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">Trang Chủ</a></li>
                <li class="item-link"><span>Về Chúng Tôi</span></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <!-- <div class="main-content-area"> -->
        <div class="aboutus-info style-center">
            <b class="box-title">SỰ THẬT THÚ VỊ VỀ WIKI MOBILE</b>
            <p class="txt-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
        </div>

        <div class="row equal-container">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="aboutus-box-score equal-elem ">
                    <b class="box-score-title">10000</b>
                    <span class="sub-title">SẢN PHẨM TRONG CỬA HÀNG</span>
                    <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the dummy text ever since the 1500s...</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="aboutus-box-score equal-elem ">
                    <b class="box-score-title">90%</b>
                    <span class="sub-title">KHÁCH HÀNG QUAY LẠI</span>
                    <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the dummy text ever since the 1500s...</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="aboutus-box-score equal-elem ">
                    <b class="box-score-title">2 million</b>
                    <span class="sub-title">NGƯỜI DÙNG TRÊN TRANG</span>
                    <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the dummy text ever since the 1500s...</p>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="aboutus-info style-small-left">
                    <b class="box-title">CHÚNG TÔI THỰC SỰ ĐANG LÀM GÌ ?</b>
                    <p class="txt-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                        roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                        Richard McClintock,</p>
                </div>
                <div class="aboutus-info style-small-left">
                    <b class="box-title">LỊCH SỬ CÔNG TY</b>
                    <p class="txt-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                        roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                        Richard McClintock,</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="aboutus-info style-small-left">
                    <b class="box-title">TẦM NHÌN</b>
                    <p class="txt-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                        roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                        Richard McClintock,</p>
                </div>
                <div class="aboutus-info style-small-left">
                    <b class="box-title">CÁC ĐƠN VỊ ĐỐI TÁC</b>
                    <p class="txt-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                        roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                        Richard McClintock,</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="aboutus-info style-small-left">
                    <b class="box-title">HỢP TÁC CÙNG CHÚNG TÔI</b>
                    <div class="list-showups">
                        <label>
                            <input type="radio" class="hidden" name="showup" id="shoup1" value="shoup1"
                                checked="checked">
                            <span class="check-box"></span>
                            <span class='function-name'>HỖ TRỢ 24/7</span>
                            <span class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry...</span>
                        </label>
                        <label>
                            <input type="radio" class="hidden" name="showup" id="shoup2" value="shoup2">
                            <span class="check-box"></span>
                            <span class='function-name'>CHẤT LƯỢNG TỐT NHẤT</span>
                            <span class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry...</span>
                        </label>
                        <label>
                            <input type="radio" class="hidden" name="showup" id="shoup3" value="shoup3">
                            <span class="check-box"></span>
                            <span class='function-name'>GIAO HÀNG NHANH NHẤT</span>
                            <span class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry...</span>
                        </label>
                        <label>
                            <input type="radio" class="hidden" name="showup" id="shoup4" value="shoup4">
                            <span class="check-box"></span>
                            <span class='function-name'>CHÍNH SÁCH CHĂM SÓC KHÁCH HÀNG ĐỈNH CAO</span>
                            <span class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry...</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="our-team-info">
            <h4 class="title-box">Our teams</h4>
            <div class="our-staff">
                <div class="slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false"
                    data-nav="true" data-dots="false" data-margin="30"
                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}'>

                    <div class="team-member equal-elem">
                        <div class="media">
                            <a href="#" title="Vũ Ngọc Tân">
                                <figure><img src="https://res.cloudinary.com/quynv300192/image/upload/w_1000,ar_1:1,c_fill,g_auto,e_art:hokusai/v1620214955/PROJECT%20KI%201/z2465533104846_26e6a50c1c01600b646ae5a00cdedf0a_1_pkailf.jpg" alt="Vũ Ngọc Tân"></figure>
                            </a>
                        </div>
                        <div class="info">
                            <b class="name">Vũ Ngọc Tân</b>
                            <span class="title">Team Leader</span>
                            <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...</p>
                        </div>
                    </div>

                    <div class="team-member equal-elem">
                        <div class="media">
                            <a href="#" title="Nguyễn Văn Quý">
                                <figure><img src="https://res.cloudinary.com/quynv300192/image/upload/w_1000,ar_1:1,c_fill,g_auto,e_art:hokusai/v1620214947/PROJECT%20KI%201/z2465533106434_642d4f2a726ae74a719d108844a1fabd_zuzajt.jpg" alt="Nguyễn Văn Quý"></figure>
                            </a>
                        </div>
                        <div class="info">
                            <b class="name">Nguyễn Văn Quý</b>
                            <span class="title">Team member</span>
                            <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...</p>
                        </div>
                    </div>

                    <div class="team-member equal-elem">
                        <div class="media">
                            <a href="#" title="Nguyễn Xuân Kiên">
                                <figure><img src="https://res.cloudinary.com/quynv300192/image/upload/w_1000,ar_1:1,c_fill,g_auto,e_art:hokusai/v1620214948/PROJECT%20KI%201/z2465533101595_248150c62453a44f9e3d652bea05bd26_1_yp0rio.jpg" alt="Nguyễn Xuân Kiên"></figure>
                            </a>
                        </div>
                        <div class="info">
                            <b class="name">Nguyễn Xuân Kiên</b>
                            <span class="title">Team member</span>
                            <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...</p>
                        </div>
                    </div>

                    <div class="team-member equal-elem">
                        <div class="media">
                            <a href="#" title="Nguyễn Văn Bình">
                                <figure><img src="https://res.cloudinary.com/quynv300192/image/upload/w_1000,ar_1:1,c_fill,g_auto,e_art:hokusai/v1620214947/PROJECT%20KI%201/z2465533095297_adfb5109b9470be4bca1610f61f41216_r6tgo4.jpg" alt="Nguyễn Văn Bình"></figure>
                            </a>
                        </div>
                        <div class="info">
                            <b class="name">Nguyễn Văn Bình</b>
                            <span class="title">Team member</span>
                            <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
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
@endsection
