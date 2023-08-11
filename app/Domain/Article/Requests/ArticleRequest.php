<?php

namespace App\Domain\Article\Requests;

use App\Domain\Article\Enums\TypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class ArticleRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
            ],
            'description' => [
                'nullable',
                'string'
            ],
            'text' => [
                'required',
                'string'
            ],
            'category_id' => [
                'required' .
                'integer',
                'exists:categories,id'
            ],
            'is_active' => ['boolean'],
            'type' => [new Enum(TypeEnum::class)],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
