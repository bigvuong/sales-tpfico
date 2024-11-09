<?php

namespace App\Http\Requests;

use App\Models\ProjectCategory;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreProjectCategoryRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:project_categories',
            ],
        ];
    }
}
