<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Create an account</title>

    <!-- Bootstrap core CSS -->
    <link href="/newAuth/resources/vends/bootstrap4/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/newAuth/resources/css/modern-business.css" rel="stylesheet">

    <link rel="stylesheet" href="/newAuth/resources/vends/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/newAuth/resources/css/form-elements.css">
    <link rel="stylesheet" href="/newAuth/resources/css/style.css">

    <style>
        body {
            background: url("/newAuth/resources/images/background.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            margin-top: 30px;
        }

    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

{{--<jsp:include page="/WEB-INF/fragments/topNavLogIn.jsp"></jsp:include>--}}
@include('layouts.homepageHeader')

<!-- Page Content -->
<div class="inner-bg">
    <div class="container">
        <div class="col-lg-5 col-md-7 col-sm-10 col-xs-10">
            <div class="form-box">
                <div class="form-top">
                    <div class="form-top-left">
                        <h3 style="color: white">Service Provider Registration</h3>
                    </div>
                    <div class="form-top-right">
                        <i class="fa fa-lock"></i>
                    </div>
                </div>
                <div class="form-bottom">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="last_name" type="text" class="form-control" name="last_name"
                                       placeholder="Last Name" required>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="first_name" type="text" class="form-control" name="first_name"
                                       placeholder="First Name" required>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('contact_number') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="contact_number" type="number" class="form-control" name="contact_number"
                                       placeholder="Contact Number" required>

                                @if ($errors->has('contact_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email"
                                        placeholder="Email" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="address" type="text" class="form-control" name="address"
                                       placeholder="Address" required>

                                @if ($errors->has('contact_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password"
                                       placeholder="Password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" placeholder="Confirm Password" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8">
                                    <a  href="{{ url('register') }}">
                                        Register as Customer
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br/>
<!-- /container -->

{{--<jsp:include page="/WEB-INF/fragments/footer.jsp"></jsp:include>--}}

<!-- Bootstrap core JavaScript -->
<script src="/newAuth/resources/vends/jquery/jquery.min.js"></script>
<script src="/newAuth/resources/js/bootstrap.min.js"></script>
</body>
</html>