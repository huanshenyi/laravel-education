<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class EntryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin.auth')->except(['loginForm','login']);
    }

    //ログインフォーム展示
    public function loginForm()
    {

        return view('admin.entry.login');
    }

    //ログイン
    public function login(Request $request)
    {
       $status = Auth::guard('admin')->attempt([
          'username'=>$request['username'],
          'password'=>$request['password'],
       ]);
       if($status){
           //ログイン成功
           return redirect('/admin/index');
       }else{
           //失敗
           return redirect('/admin/login')->with('error','データー確認できませんでした');
       }
    }
    //admin
    public function index()
    {
        return view('admin.entry.index');
    }
    //ログアウト
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
