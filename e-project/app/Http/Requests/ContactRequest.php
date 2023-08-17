<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^0[0-9]{9,11}$/',
            'message' => 'required'

        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Vui lòng nhập tên thành viên!",
            'email.required' => "Vui lòng nhập email!",
            'email.email' => "Email không hợp lệ",
            'phone.required' => "Vui lòng nhập số điện thoại",
            'phone.regex' => "Số điện thoại không hợp lệ",
            'message.required' => "Vui lòng nhập content"
        ];
    }
}
