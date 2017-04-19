<!doctype html>
<html lang="zh=CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册</title>

    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        .middle{
            margin-top: 25%;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row middle">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <span>新用户注册</span>
                </div>

                <div class="panel-body">
                    {!! Form::open(['url' => url('register'), 'method' => 'POST', 'class' => 'form-groups form-horizontal', 'role' => 'form']) !!}

                    <div class="form-group {{ $errors -> has('name')?' has-error':' ' }}">
                        <div class="col-md-2 col-md-offset-1">
                            {!! Form::label('name', '用户名：', ['class' => 'control-label']) !!}
                        </div>
                        <div class="col-md-8">
                            {!! Form::text('name', old('name'), ['class' => 'form-control col-md-6']) !!}
                            @if($errors -> has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors -> first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group {{ $errors -> has('email')?' has-error':' ' }}">
                        <div class="col-md-2 col-md-offset-1">
                            {!! Form::label('email', '邮箱：', ['class' => 'control-label']) !!}
                        </div>
                        <div class="col-md-8">
                            {!! Form::email('email', old('email'), ['class' => 'form-control col-md-6']) !!}
                            @if($errors -> has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors -> first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group {{ $errors -> has('password')?' has-error':' ' }}">
                        <div class="col-md-2 col-md-offset-1">
                            {!! Form::label('password', '密码：', ['class' => 'control-label']) !!}
                        </div>
                        <div class="col-md-8">
                            {!! Form::password('password', ['class' => 'form-control col-md-6']) !!}
                            @if($errors -> has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors -> first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group {{ $errors -> has('password_confirmation')?' has-error':' ' }}">
                        <div class="col-md-2 col-md-offset-1">
                            {!! Form::label('password_confirmation', '确认密码：', ['class' => 'control-label']) !!}
                        </div>
                        <div class="col-md-8">
                            {!! Form::password('password_confirmation', ['class' => 'form-control col-md-6']) !!}
                            @if($errors -> has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors -> first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-3">
                            <button class="btn btn-primary"><span class="glyphicon glyphicon-copy" style="margin-right: 10px;"></span>注册</button>
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>