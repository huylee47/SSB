<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateConfigRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "id"=>["required"],
            "title"=>["required"],
            "description"=>["required"],
            "facebook"=>["required","url"],
            "logo"=>["required"],
            "favicon"=>["required"],
            "hotline"=>["required"],
            "email"=>["required","email"],
            "address"=>["required"],
            "map"=>["required"],
        ];
    }
}
