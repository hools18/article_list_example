<?php

namespace App\Domain\Article\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleIndexRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'limit' => [
                'nullable',
                'int',
                'min:1',
                'max:20',
            ],
        ];
    }
}
