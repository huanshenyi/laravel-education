<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>lravelVideo - </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link href="/node_modules/hdjs/css/bootstrap.min.css" rel="stylesheet">
    <link href="/node_modules/hdjs/css/font-awesome.min.css"
          rel="stylesheet">
    <script>
        hdjs = {
            'base': '/node_modules/hdjs',
            'uploader': '/component/uploader',
            'filesLists': '/component/filesLists?',
            'removeImage': '?s=component/upload/removeImage&m=member&siteid=18',
            'ossSign': '?s=component/oss/sign&m=member&siteid=18',
        };
    </script>
    <script src="/node_modules/hdjs/app/util.js"></script>
    <script src="/node_modules/hdjs/require.js"></script>
    <script src="/node_modules/hdjs/config.js"></script>
    <link href="/css/hdcms.css" rel="stylesheet">
    <script>
        require(['jquery'], function ($) {
            //为异步请求设置CSRF令牌
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        })
    </script>
</head>
<body class="site">
<div class="container-fluid admin-top">

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <ul class="nav navbar-nav">
                    <li class="top_menu">
                        <a href="?s=site/entry/home&siteid=18&mark=platform" class="quickMenuLink">
                            <i class="'fa-w fa fa-comments-o"></i> ホームページ </a>
                    </li>
                    <li class="top_menu">
                        <a href="http://houdunwang.com" target="_blank">
                            <i class="'fa-w fa fa-cubes"></i> 実務訓練 </a>
                    </li>
                    <li class="top_menu">
                        <a href="http://houdunren.com" class="quickMenuLink">
                            <i class="'fa-w fa fa-cubes"></i> オンライン動画 </a>
                    </li>
                    <li class="top_menu">
                        <a href="http://bbs.houdunwang.com" class="quickMenuLink">
                            <i class="'fa-w fa fa-cubes"></i> コミュニティ </a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="fa fa-w fa-user"></i>
                            {{Auth::guard('admin')->user()->username}} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/admin/changePassword">プロフィール</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/admin/logout">ログアウト</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--メニューバーend-->
</div>
<!--主体-->
<div class="container-fluid admin_menu">
    <div class="row">
        <div class="col-xs-12 col-sm-3 col-lg-2 left-menu">
            <div class="search-menu">
                <input class="form-control input-lg" type="text" placeholder="検索"
                       onkeyup="search(this)">
            </div>

            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="panel-title">システム管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="javascript:;">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus">
                    <li class="list-group-item" id="35">
                        <a href="/admin/changePassword">プロフィール </a>
                    </li>
                </ul>
                <div class="panel-heading">
                    <h4 class="panel-title">内容管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="javascript:;">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus">
                    <li class="list-group-item" id="39">
                        <a href="/admin/tag">タグ管理 </a>
                    </li>
                    <li class="list-group-item" id="40">
                        <a href="/admin/lesson">
                            動画管理 </a>
                    </li>
                </ul>

            </div>
        </div>
        <div class="col-xs-12 col-sm-9 col-lg-10">
            @yield('content')
        </div>
    </div>
</div>
<div class="master-footer">
    <a href="https://github.com/huanshenyi">MyGitHub</a>

    <br>
   laravelVideo v1.0 © 2019- www.laravelVideo.com
</div>
<script>
    require(['bootstrap']);
</script>
<!--右键菜单添加到快捷导航-->
<div id="context-menu">
    <ul class="dropdown-menu" role="menu">
        <li><a tabindex="-1" href="#">添加到快捷菜单</a></li>
    </ul>
</div>
<!--右键菜单删除快捷导航-->
<div id="context-menu-del">
    <ul class="dropdown-menu" role="menu">
        <li><a tabindex="-1" href="#">删除菜单</a></li>
    </ul>
</div>
</body>
@include('admin.layout.errors')
@include('flash::message')
<script>
    require(['bootstrap'], function ($) {
        $('#flash-overlay-modal').modal();
    });
</script>
</html>
<style>
    .pagination {
        margin: 0px;
        float: right;
    }
</style>