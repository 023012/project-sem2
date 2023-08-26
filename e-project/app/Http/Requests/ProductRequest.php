<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'price' => 'required|numeric|min:0',
            'thumbnail' => 'required',
            'description' => 'required',
            'material' => 'required',
            'high' => 'required|numeric|min:0',
            'width' => 'required|numeric|min:0',
            'length' => 'required|numeric|min:0',
            'category_id' => 'required|numeric|min:0',
            'discount_id' => 'required|numeric|min:0',
            'quantity' => 'required|numeric|min:0',
            'status' => 'required|in:0,1',
            'featured' => 'required|in:0,1',
            'active' => 'required|in:0,1',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên là trường bắt buộc.',
            'price.required' => 'Giá là trường bắt buộc.',
            'price.numeric' => 'Giá trị không hợp lệ',
            'thumbnail.required' => 'Đường dẫn hình ảnh là trường bắt buộc.',
            'description.required' => 'Mô tả là trường bắt buộc.',
            'material.required' => 'Chất liệu là trường bắt buộc.',
            'high.required' => 'Chiều cao là trường bắt buộc.',
            'high.numeric' => 'Giá trị không hợp lệ',
            'width.required' => 'Chiều rộng là trường bắt buộc.',
            'width.numeric' => 'Giá trị không hợp lệ',
            'length.required' => 'Chiều dài là trường bắt buộc.',
            'length.numeric' => 'Giá trị không hợp lệ',
            'quantity.required' => 'Số lượng là trường bắt buộc.',
            'quantity.numeric' => 'Giá trị không hợp lệ',
        ];
    }
}
