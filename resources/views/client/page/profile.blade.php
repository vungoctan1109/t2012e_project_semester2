@extends('client.template.form')
@section('title_page','Privacy Policy')
@section('private_link')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection
@section('main_content_page')
    @php
        use Illuminate\Support\Facades\Auth;
            $checklogin =Auth::check();
        if ($checklogin){
            $admin_user_role = Auth::user()->role;
        }else{
            $admin_user_id = " ";
        }
    @endphp
    <main id="main" class="main-site" style="min-height: 50vh;align-items: center;justify-content: center">
        <div class="container bootstrap snippet">
            <div class="row">
                <div class="col-sm-10"><h1><b>{{$user->fullName}}</b></h1></div>
            </div>
            <div class="row">
                <div class="col-sm-3"><!--left col-->
                    <div id="list-preview-image">
                        <img src="{{$user->avatar}}" alt="avatar">
                        <br><br>
                    </div>
                </div><!--/col-3-->
                <div class="col-sm-9">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Information Detail</a></li>
                        <li><a data-toggle="tab" href="#messages">Edit Profile</a></li>
                        <li style="{{$admin_user_role ==1 ? 'display:none' : ''}}"><a data-toggle="tab" href="#settings">Purchase History</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <hr>
                            <form class="form" action="##" method="post" id="registrationForm">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="first_name"><h4><b>Full name:</b> {{$user->fullName}}</h4></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="last_name"><h4><b>Email:</b> {{$user->email}}</h4></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="phone"><h4><b>Phone:</b> {{$user->phone}}</h4></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="mobile"><h4><b>Address:</b> {{$user->address}}</h4></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="email"><h4><b>Description:</b> {{$user->description}}</h4></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="email"><h4><b>Role:</b> {{$user->strRolllle}}</h4></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="password"><h4>Status: {{$user->strStatus}}</h4></label>
                                    </div>
                                </div>
                            </form>

                            <hr>

                        </div><!--/tab-pane-->
                        <div class="tab-pane" id="messages">

                            <h2></h2>

                            <hr>
                            <form class="form" id="registrationForm" name="registrationForm">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="first_name"><h4><b>Email:</b> {{$user->email}}</h4></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="first_name"><h4><b>Account Type:</b> {{$user->strRolllle}}</h4></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="last_name"><h4><b>Full Name:</b></h4></label>
                                        <input type="text" class="form-control" name="fullName" id="fullName"
                                               value="{{$user->fullName}}" title="enter your last name if any.">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="last_name"><h4><b>Phone Number:</b></h4></label>
                                        <input type="text" class="form-control" name="phone"
                                               value="{{$user->phone}}" title="enter your last name if any.">
                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="phone"><h4><b>Address:</b></h4></label>
                                        <input type="text" class="form-control" name="address"
                                               value="{{$user->address}}" title="enter your phone number if any.">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="mobile"><h4><b>Description:</b></h4></label>
                                        <input type="text" class="form-control" name="description"
                                               value="{{$user->description}}"
                                               title="enter your mobile number if any.">
                                    </div>
                                </div>
                                <input id="avatar" type="text" value="{{$user->avatar}}" name="avatar" style="display: none">

                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <br>
                                        <button type="button" id="btnThumbnailLink" class="btn btn-info mt-1 mb-3"
                                                value="">Change Avatar</button>
                                        <br><br>
                                        <button class="btn btn-lg btn-primary" type="submit" id="btnSaveEdit"><i
                                                class="glyphicon glyphicon-ok-sign" ></i> Save
                                        </button>
                                        <button class="btn btn-lg" type="reset"><i
                                                class="glyphicon glyphicon-repeat"></i> Reset
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div><!--/tab-pane-->
                        <div class="tab-pane" id="settings">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col"># Order ID</th>
                                    <th scope="col">Recipient's name</th>
                                    <th scope="col">Ship Phone</th>
                                    <th scope="col">Ship Email</th>
                                    <th scope="col">Total Price (VND)</th>
                                    <th scope="col">Created At</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($order as $ord)
                                    <tr>
                                        <td style="text-align:center; vertical-align: middle">{{$ord->id}}</td>
                                        <td style="text-align:center; vertical-align: middle">{{$ord->name}}</td>
                                        <td style="text-align:center; vertical-align: middle">{{$ord->phone}}</td>
                                        <td style="text-align:center; vertical-align: middle">{{$ord->email}}</td>
                                        <td style="text-align:center; vertical-align: middle">{{$ord->fPrice}}</td>
                                        <td style="text-align:center; vertical-align: middle">{{date('d-m-Y', strtotime($ord->created_at))}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div><!--/tab-pane-->
                </div><!--/tab-content-->

            </div><!--/col-9-->
        </div><!--/row-->

    </main>

@endsection


@section('private_scripts')
    <script>
        $(document).ready(function () {
            $('body').addClass('inner-page about-us');
        });
    </script>
    <script src="https://upload-widget.cloudinary.com/global/all.js" type="text/javascript"></script>
    <script src="/dist/js/pages/client/profile.js"></script>
@endsection