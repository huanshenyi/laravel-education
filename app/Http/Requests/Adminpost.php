<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;
use Hash;

class Adminpost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::guard('admin')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    //検証ルールを追加
    public function addValidator()
    {
          //パスワード検証
        Validator::extend('check_password',function ($attribute,$value,$parameters,$validator){
            return Hash::check($value,\Auth::guard('admin')->user()->password);
        });
    }

    public function rules()
    {
        return [
            'password'=>'sometimes|required|confirmed',
            'password_confirmation'=>'sometimes|required',
            'original_password'=>'sometimes|required|check_password',
        ];
    }


    public function messages()
    {
        $this->addValidator();
        return [
            'password.required'=>'パスワード空ではいけません',
            'original_password.check_password'=>'元のパスワード間違ってます',
            'password_confirmation.required'=>'パスワード確認は空ではいけません',
            'password.confirmed'=>'二回の入力が合ってません',
            'original_password.required'=>'元のパスワードが間違ってます',
        ];
    }
}
