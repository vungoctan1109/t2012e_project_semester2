@extends('client.template.form')
@section('title_page','Contact Us')
@section('private_link')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('main_content_page')
    @php
        if (\Illuminate\Support\Facades\Auth::check()){
        $user = \Illuminate\Support\Facades\Auth::user();
        $fullname = $user->fullName;
        $email = $user->email;
        $phone = $user->phone;
            }else{
      $fullname = '';
        $email = '';
        $phone = '';
            }
    @endphp
    <main id="main" class="main-site left-sidebar">
        <div class="container">
            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="/client/page/home" class="link">home</a></li>
                    <li class="item-link"><span>Contact us</span></li>
                </ul>
            </div>
            <div class="row">
                <div class=" main-content-area">
                    <div class="wrap-contacts ">
                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <div class="contact-box contact-form">
                                <h2 class="box-title">Leave a Message</h2>
                                <form id="frmFeedBack" action="#" method="get" name="frm-contact">
                                    @csrf
                                    <label for="name">Full name:</label>
                                    <input type="text" value="{{$fullname}}" id="name" name="name">
                                    <label for="email">Email:</label><br>
                                    <input type="text" value="{{$email}}" id="email" name="email">
                                    <label for="email">Phone number:</label><br>
                                    <input type="text" value="{{$phone}}" id="phone" name="phone">
                                    <label for="comment">Comment</label>
                                    <textarea name="comment" id="comment"></textarea>
                                    <input type="submit" name="send-feedback" value="Submit">
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <div class="contact-box contact-info">
                                <div class="wrap-map">
                                    <div class="mercado-google-maps" id="az-google-maps57341d9e51968" data-hue=""
                                         data-lightness="1" data-map-style="2" data-saturation="-100"
                                         data-modify-coloring="false" data-title_maps="Kute themes"
                                         data-phone="088-465 9965 02" data-email="wiki.mobile.store@gmail.com"
                                         data-address="8A Tôn Thất Thuyết, Hà Nội" data-longitude="105.78226183128689"
                                         data-latitude="21.028547210187156" data-pin-icon="" data-zoom="16"
                                         data-map-type="ROADMAP"
                                         data-map-height="263">
                                    </div>
                                </div>
                                <h2 class="box-title">Contact Detail</h2>
                                <div class="wrap-icon-box">

                                    <div class="icon-box-item">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <div class="right-info">
                                            <b>Email</b>
                                            <p>wiki.mobile.store@gmail.com</p>
                                        </div>
                                    </div>

                                    <div class="icon-box-item">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <div class="right-info">
                                            <b>Phone</b>
                                            <p>0123-465-789-111</p>
                                        </div>
                                    </div>

                                    <div class="icon-box-item">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <div class="right-info">
                                            <b>Mail Office</b>
                                            <p>Sed ut perspiciatis unde omnis<br/>Street Name, Los Angeles</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end main products area-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </main>
@endsection


@section('private_scripts')
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="/dist/js/pages/client/contact.js"></script>
    {{--<script>--}}
    {{--    $(document).ready(function () {--}}
    {{--        $('body').addClass('home-page home-01');--}}
    {{--    });--}}
    {{--</script>--}}
@endsection
