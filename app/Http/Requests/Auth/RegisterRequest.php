<?php

namespace App\Http\Requests\Auth;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',

            'password' => 'required|string|min:3|confirmed',

            'phone' => 'required|string',
            'country' => 'required|string',
            'governate' => 'required|string',
            'city' => 'required|string',
            'address' => 'required|string',
            'role' => 'required|in:admin,user',
            'category_id' => 'nullable',
            'code' => 'nullable|string|max:255',
        ];
    }
}
