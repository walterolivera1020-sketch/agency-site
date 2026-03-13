<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InquiryStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'firstName' => ['required', 'string', 'max:100'],
            'lastName'  => ['required', 'string', 'max:100'],
            'email'     => ['required', 'email', 'max:255'],
            'phone'     => ['nullable', 'string', 'max:50'],
            'position'  => ['nullable', 'string', 'max:255'],
            'message'   => ['required', 'string', 'max:3000'],
        ];
    }

    public function messages(): array
    {
        return [
            'firstName.required' => 'First name is required.',
            'lastName.required'  => 'Last name is required.',
            'email.required'     => 'Email is required.',
            'email.email'        => 'Please enter a valid email address.',
            'message.required'   => 'Message is required.',
        ];
    }
}