<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class register extends FormRequest
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
            'HoTen' => 'required',
            'name' => 'required',
            'password' => 'required|min:6',
            'NgaySinh' => 'required',
            'DiaChi' => 'required',
            'Email' => 'required|email'
           
        ];
    }

    public function messages()
    {
        return [
            'HoTen.required' => 'Không được để chống hoten',
            'name.required' => 'Không được để chống tên đăng nhập',
            'password.required' => 'Không được để chống mật khẩu',
            'password.min' => 'Mật khẩu không được ít hơn 6 ký tự',
            'NgaySinh.required' => 'Ngay sinh khong duoc de trong',
            'DiaChi.required' => 'Dia chi khong duoc de trong',
            'Email.required' => 'Email khong duoc de trong',
            'Email.email' => 'Khong phai email'
        ];
    }
}
