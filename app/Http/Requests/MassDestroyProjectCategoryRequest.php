<?php

namespace App\Http\Requests;

use App\Models\ProjectCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyProjectCategoryRequest extends FormRequest
{
    
    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:project_categories,id',
        ];
    }
}
