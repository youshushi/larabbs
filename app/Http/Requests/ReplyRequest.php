<?php

namespace App\Http\Requests;

class ReplyRequest extends Request
{
    public function rules()
    {
        return [
            'content' => 'required|min:3',
        ];
    }

    public function messages()
    {
        return [
            'content.required' => '内容不能为空',
            'content.min' => '内容必须至少三个字符',
        ];
    }
}
