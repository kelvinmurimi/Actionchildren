<?php

declare(strict_types=1);

namespace App\Http\Requests\careers;

use Illuminate\Foundation\Http\FormRequest;

class CreateCareersRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //
            'title'=>'required',
            'content'=>'required',
            'description'=>'required',
            'document'=>'required',
        ];
    }
}
