<?php

namespace App\Http\Controllers\Component;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    //
    public function uploader(Request $request)
    {
        $upload = $request->file;
        if($upload->isValid()){
                                                  //config/filesystems内に配置
            $path = $upload->store(date('ym'),'attachment');
            return ['valid' => 1,'message'=>asset('attachment/'.$path)];
        }
        return ['valid'=>0,'message'=>'アップロード失敗しましたファイルは2mb超えてはならない'];

    }

    public function filesLists()
    {
        return ['data' => [],'page'=>''];
    }
}
