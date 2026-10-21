<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // por padrão vem false e bloqueia tudo (403)
    }

    public function rules(): array
    {
        return [
            'file' => ['required', 'file', 'max:2048'],
        ];
    }
}
