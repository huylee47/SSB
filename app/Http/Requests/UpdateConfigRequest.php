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
            "id"=>["required","digits:20"],
            "title"=>["required","max:255"],
            "description"=>["required","max:255"],
            "facebook"=>["required","url","max:255"],
            "logo"=>["max:255"],
            "favicon"=>["max:255"],
            "hotline"=>["max:255"],
            "email"=>["required","email","max:255"],
            "address"=>["required","max:255"],
            "map"=>["required"],
        ];
    }
}
