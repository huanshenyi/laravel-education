<?php

namespace App\Http\Controllers\Api;

use App\Model\Lesson;
use App\Model\Tag;
use App\Model\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContentController extends CommonController
{
    //タグ
    public function tags()
    {
        return $this->response(Tag::get());
    }

    //
    public function lesson($tid)
    {
        if($tid){
            $data=\DB::table('lessons')
                  ->select('lessons.*')
                  ->join('tag_lessons','lessons.id','=','tag_lessons.lesson_id')
                  ->where('tag_id', $tid)
                  ->get();

        }else{
            $data = Lesson::get();
        }

        return $this->response($data);
    }

    //オススメ
    public function commendLesson($row)
    {
        $data = Lesson::where('iscommend',1)->limit($row)->get();
        return $this->response($data);
    }

    //人気
    public function hotLesson($row)
    {
        $data = Lesson::where('ishot',1)->limit($row)->get();
        return $this->response($data);
    }

    //動画
    public function videos($lessonId)
    {
        $data = Video::where('lesson_id',$lessonId)->get();
        return $this->response($data);
    }

    //動画タイトル
    public function VideoTitle($lessonId)
    {
        $data = Lesson::where('id',$lessonId)->get();

        return $this->response($data);
    }

}
