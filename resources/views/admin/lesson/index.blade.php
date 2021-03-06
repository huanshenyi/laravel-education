@extends('admin.layout.master')

@section('content')
    <ul class="nav nav-tabs">
        <li class="active"><a href="">レッスンリスト</a></li>
        <li><a href="/admin/lesson/create">新規レッスン</a></li>
    </ul>
    <form action="" method="post" class="form-horizontal" role="form">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">レッスンリスト</h3>
            </div>
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th width="100">番号</th>
                        <th>レッスン名</th>
                        <th>動画数</th>
                        <th width="120">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $d)
                        <tr>
                            <td>{{$d['id']}}</td>
                            <td>{{$d['title']}}</td>
                            <td>{{$d->videos()->count()}}</td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="/admin/lesson/{{$d['id']}}/edit" class="btn btn-default">編集</a>
                                    <a href="javascript:;" onclick="del({{$d['id']}})"
                                       class="btn btn-default">削除</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </form>
    <script>
        function del(id) {
            require(['util'], function (util) {
                util.confirm('削除しますか?', function () {
                    $.ajax({
                        url: '/admin/lesson/' + id,
                        method: 'DELETE',
                        success: function (response) {
                            util.message(response.message, 'refresh');
                        }
                    })
                })
            })
        }
    </script>
@endsection