<?php

declare(strict_types=1);

namespace App\Http\Requests\partners;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePartnersRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //
            'name'=>'required',
            'image'=>'required',
            'description'=>'required',
            'linkurl'=>'required'
        ];
    }
}
