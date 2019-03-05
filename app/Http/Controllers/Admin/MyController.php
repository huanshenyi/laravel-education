<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Adminpost;
use Illuminate\Http\Request;



class MyController extends CommonController
{
    //
    public function passwordForm()
    {
        return view('admin.my.passwordForm');
    }

    public function changePassword(Adminpost $request)
    {
       $model =\Auth::guard('admin')->user();
       $model->password =bcrypt($request['password']);
       $model->save();
       flash('修正しました')->overlay();
       return redirect()->back();

    }
}
