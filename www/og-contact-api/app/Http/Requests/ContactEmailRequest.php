<?php

namespace App\Http\Requests;

use App\Enum\ContactSubjectEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class ContactEmailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'subject' => ['required', new Enum(ContactSubjectEnum::class)],
            'name' => 'required|string:255',
            'company' => 'required|string:255',
            'email' => 'required|string|email',
            'phone' => 'required|string',
            'message' => 'required|string'
        ];
    }
}
