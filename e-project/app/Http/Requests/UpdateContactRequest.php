<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactRequest extends FormRequest
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
            'name' => 'required|regex:/^[A-Za-zàÀảẢãÃáÁạẠăĂằẰẳẲẵẴắẮặẶâÂầẦẩẨẫẪấẤậẬèÈẻẺẽẼéÉẹẸêÊềỀểỂễỄếẾệỆìÌỉỈĩĨíÍịỊòÒỏỎõÕóÓọỌồỒổỔỗỖốỐộỘờỜởỞỡỠớỚợỢùÙủỦũŨúÚụỤừỪửỬữỮứỨựỰỳỲỷỶỹỸýÝỵỴ]+[A-Za-zàÀảẢãÃáÁạẠăĂằẰẳẲẵẴắẮặẶâÂầẦẩẨẫẪấẤậẬèÈẻẺẽẼéÉẹẸêÊềỀểỂễỄếẾệỆìÌỉỈĩĨíÍịỊòÒỏỎõÕóÓọỌồỒổỔỗỖốỐộỘờỜởỞỡỠớỚợỢùÙủỦũŨúÚụỤừỪửỬữỮứỨựỰỳỲỷỶỹỸýÝỵỴ]/',
            'email' => 'required|email',
            'phone' => 'required|regex:/^[0-9]{9,11}$/',
            'address' => 'required',
            'content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Vui lòng nhập tên thành viên!",
            'name.regex' => "Tên không hợp lệ!",
            'email.required' => "Vui lòng nhập email!",
            'email.email' => "Email không hợp lệ",
            'phone.required' => "Vui lòng nhập số điện thoại",
            'phone.regex' => "Số điện thoại không hợp lệ",
            'address.required' => "Vui lòng nhập địa chỉ",
            'content.required' => "Vui lòng nhập mật khẩu"
        ];
    }
}
