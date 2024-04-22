<?php

namespace App\Http\Requests;

use App\Models\Category;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('category_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'slug' => [
                'string',
                'required',
            ],
            'parent_category' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'thumbnail' => [
                'array',
                'nullable',
            ],
            'thumbnail.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'cover_image' => [
                'array',
                'nullable',
            ],
            'cover_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
        ];
    }
}
