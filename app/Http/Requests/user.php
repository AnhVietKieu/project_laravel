<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class user extends FormRequest
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
            'Email' => 'required|email',
            'MatKhau' => 'required|min:6'
        ];
    }

    public function messages()
    {
        return [
            'Email.required' => 'Không được để chống tên đăng nhập',
            'Email.email' => 'Tài khoản không phải email',
            'MatKhau.required' => 'Không được để chống mật khẩu',
            'MatKhau.min' => 'Mật khẩu không được ít hơn 6 ký tự',

        ];
    }
}
