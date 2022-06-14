<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'post.title' => 'required|string|max:100',
            'post.body' => 'required|string|max:4000',
            'post.group' => 'required|string|max:50',
            'post.name' => 'required|string|max:50',
            'post.type'=> 'required|string|max:50',
            'post.name_photo' => 'required|string|max:50',
        ];
    }
}