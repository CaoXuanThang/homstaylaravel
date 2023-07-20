<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            // lấy ra tên phương thức cần sử lý
            

        ];
        $currentAction = $this->route()->getActionMethod();

        switch ($this->method()):
            case 'GET':
                
                return $rules;
                break;
            case 'POST':
                switch ($currentAction):
                    case 'register':
                        // xây dựng rules validate trong này
                        $rules = [
                            'name' => 'required|string|max:255',
                            'email' => 'required|email|string|max:255|unique:users',
                            'password' => 'required|min:6|confirmed',
                        ];
                        return $rules;
                        break;
                endswitch;
                break;
                return $rules;
                break;
        // case 'PUT':
        //     return $rules;
        //     break;
        // case 'PATCH':
        //     return $rules;
        //     break;
        // case 'DELETE':
        //     return $rules;
        //     break;
        // default:
        //     return $rules;
        //     break;
        endswitch;
        return [
            //
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên',
            'name.string' => 'Vui lòng nhập tên',
            'name.max' => 'Tên phải chứa ít nhất :max ký tự.',
            'email.unique' => 'Email đã tồn tại trong hệ thống.',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Điện thoại không phải là email',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.string' => 'Vui lòng nhập mật khẩu',
            'password.max' => 'Mật khẩu phải chứa ít nhất :max ký tự.',
            'password.min' => 'Mật khẩu phải chứa ít nhất :min ký tự.',
            'password.confirmed' => 'Mật khẩu không trùng khớp, vui lòng nhập lại',
        ];
    }
}
