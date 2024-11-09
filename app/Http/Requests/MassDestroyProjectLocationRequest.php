<?php

namespace App\Http\Requests;

use App\Models\ProjectLocation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyProjectLocationRequest extends FormRequest
{
    
    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:project_locations,id',
        ];
    }
}
