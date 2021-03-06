<?php
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
    //adminログイン
    Route::get('/login','EntryController@loginForm');
    //ログイン
    Route::post('/login','EntryController@login');
    //adminページ
    Route::get('/index','EntryController@index');
    //ログアウト
    Route::get('/logout','EntryController@logout');
    //パスワード修正
    Route::get('/changePassword','MyController@passwordForm');
    Route::post('/changePassword','MyController@changePassword');

    //タグ管理
    Route::resource('tag','TagController');
    //授業管理
    Route::resource('lesson','LessonController');
});