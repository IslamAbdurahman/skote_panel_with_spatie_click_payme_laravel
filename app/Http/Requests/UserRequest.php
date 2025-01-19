<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'=>'required',
            'username'=>'required',
            'phone'=>'required',
            'password'=>'required',
            'dob'=>'required',
            'avatar'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'F.I.SH kiritilmagan.',
            'username.required' => 'Foydalanuvchi kiritilmagan.',
            'phone.required' => 'Telefon raqam kiritilmagan.',
            'password.required' => 'Parol kiritilmagan.',
            'dob.required' => 'Tug`ilgan sana kiritilmagan.',
            'avatar.required' => 'Rasm kiritilmagan.',
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        return redirect()->back()->with([
            'error' => implode(', ', $validator->errors()->all()),
        ]);
    }
}
