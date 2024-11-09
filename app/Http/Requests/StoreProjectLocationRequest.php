<?php

namespace App\Http\Requests;

use App\Models\ProjecLocation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreProjectLocationRequest extends FormRequest
{
    public function rules()
    {
        return [
            'city_name' => [
                'string',
                'required'
            ],
            'district_name' => [
                'string',
                'required'
            ],
            'ward_name' => [
                'string',
                'required'
            ],
            'village_name' => [
                'string',
                'required'
            ],
        ];
    }
}
