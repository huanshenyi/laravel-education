<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>laravelVideo - テスト</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="/node_modules/hdjs/css/bootstrap.min.css" rel="stylesheet">
    <link href="/node_modules/hdjs/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/hdcms.css" rel="stylesheet">
</head>
<body class="hdcms-login">
<div class="container logo">
    <div style="background: url('https://urashita.com/wp-content/uploads/2016/01/laravel-logo.png') no-repeat; background-size: contain;height: 60px;"></div>
</div>
<div class="container well">
    <div class="row ">
        <div class="col-md-6">
            <form method="post" action="">
                {{ csrf_field() }}
                <div class="form-group ">
                    <label>ユーザー名</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-w fa-user"></i></div>
                        <input type="text" name="username" class="form-control input-lg"
                               placeholder="ユーザー名を入力してください" value="">
                    </div>
                </div>
                <div class="form-group ">
                    <label>パスワード</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-w fa-key"></i></div>
                        <input type="password" name="password"
                               class="form-control input-lg" placeholder="パスワード入力してください" value="">
                    </div>
                </div>
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{session('error')}}
                    </div>
                @endif
                <button type="submit" class="btn btn-primary btn-lg">ログイン</button>
            </form>
        </div>
        <div class="col-md-6">
            <div style="background: url('http://www.cloudways.com/blog/wp-content/uploads/2-16.jpg');background-size:100% ;height:230px;"></div>
        </div>
    </div>
    <div class="copyright">
        laravelVideo v1.0 © 2019~ http://laravelvideo.com
    </div>
</div>
</body>
</html>