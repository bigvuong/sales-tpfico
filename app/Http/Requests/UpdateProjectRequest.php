<?php

namespace App\Http\Requests;

use App\Models\Project;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProjectRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => [
                'required',
            ],
            'owner' => [
                'required',
            ],
            'phone' => [
                'required',
            ],
            'price' => [
                'nullable',
            ],
            'land_number' => [
                'nullable',
            ],
            'address' => [
                'nullable',
            ],
            'area' => [
                'nullable',
            ],
            'huong' => [
                'string',
                'nullable',
            ],
            'road' => [
                'string',
                'nullable',
            ],
            'photo' => [
                'nullable',
            ],
            'content' => [
                'nullable',
            ],
            'status' => [
                'nullable',
            ],
            'juridical' => [
                'nullable',
            ],
            'project_categories.*' => [
                'integer',
            ],
            'project_categories' => [
                'array',
            ],
            'project_locations.*' => [
                'integer',
            ],
            'project_locations' => [
                'array',
            ],
        ];
    }
}