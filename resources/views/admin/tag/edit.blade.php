@extends('admin.layout.master')
@section('content')
    <ul class="nav nav-tabs">
        <li><a href="/admin/tag">タグリスト</a></li>
        <li class="active"><a href="/admin/tag/create">タグ修正</a></li>
    </ul>
    <form action="/admin/tag/{{$model['id']}}" method="post" class="form-horizontal" role="form">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">タグ管理</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">タグ</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" value="{{$model['name']}}">
                    </div>
                </div>

            </div>
        </div>
        <button class="btn btn-primary">提出</button>
    </form>
@endsection