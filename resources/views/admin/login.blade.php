<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WHISKY CASTLE | Log in</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="/bower_components/AdminLTE/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="/bower_components/AdminLTE/plugins/iCheck/square/blue.css">
        <link rel="stylesheet" href="/bower_components/AdminLTE/custom.css">

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="/login"><b>Dashboard</b></a>
            </div>
            <div class="login-box-body">
                <p class="login-box-msg">Вход в контролният панел</p>
                @if (count($errors) > 0)
                    <div class="alert alert-danger error-box">
                        @foreach ($errors->all() as $error)
                            - <strong>{{ $error }}</strong><br />
                        @endforeach
                    </div>
                @endif
                {{ Form::open(array('url' => 'login')) }}
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Username" name="username" value="{{old('username')}}">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
        <script src="{{ asset ("/bower_components/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js") }}"></script>
        <script src="{{ asset ("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
        <script src="{{ asset ("/bower_components/AdminLTE/plugins/iCheck/icheck.min.js") }}" type="text/javascript"></script>
        <script>
$(function () {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%'
    });
});
        </script>
    </body>
</html>