<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        // return [
        //     'title' => 'bail|required|string|max:255',
        //     "content" => 'bail|required',
        // ];
        return [
            'title' => ['bail', 'required', 'string', 'max:255'],
            "content" => ['bail', 'required'],
        ];
    }
}
