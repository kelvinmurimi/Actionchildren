<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //
            'title'=>['required'],
            'details'=>['required'],
            'description'=>['required'],
            'image'=>['required','mimes:jpg,png,jpeg','max:5048'],
        ];
    }
}
