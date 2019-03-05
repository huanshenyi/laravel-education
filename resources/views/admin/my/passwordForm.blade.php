@extends('admin.layout.master')
@section('content')
    <form action="/admin/changePassword" method="post" class="form-horizontal" role="form">
        {{csrf_field()}}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">パスワード修正</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">元のパスワード</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="original_password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">新しいパスワード</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">パスワード確認</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary">提出</button>
    </form>
@endsection