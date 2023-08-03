<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DesignerRequest extends FormRequest
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
        $rules = [];
        $currentAction = $this->route()->getActionMethod();

        switch ($this->method()):
            case 'GET':

                return $rules;
                break;
            case 'POST':
                switch ($currentAction):
                    case 'create':
                        // xây dựng rules validate trong này
                        $rules = [
                            'name' => 'required|string|max:255',
                            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', // Đảm bảo file ảnh hợp lệ và có kích thước tối đa là 2MB
                            'email' => 'required|email|unique:users,email',
                            'phone' => 'required|string|max:20', // Điện thoại có thể có các ký tự số và dấu "+" ở đầu
                            'description' => 'nullable|string', // Mô tả có thể là chuỗi hoặc không có
                            'facebook' => 'nullable|url', // Link Facebook phải là URL hợp lệ (hoặc null)
                            'twitter' => 'nullable|url', // Link Twitter phải là URL hợp lệ (hoặc null)
                            'instagram' => 'nullable|url', // Link Instagram phải là URL hợp lệ (hoặc null)
                        ];
                        return $rules;
                        break;
                    case 'update' :
                        $rules = [
                            'name' => 'required|string|max:255',
                            'image' => 'image|mimes:jpeg,png,jpg,gif|max:5120', // Đảm bảo file ảnh hợp lệ và có kích thước tối đa là 2MB
                            'email' => 'required|email|unique:users,email',
                            'phone' => 'required|string|max:20', // Điện thoại có thể có các ký tự số và dấu "+" ở đầu
                            'description' => 'nullable|string', // Mô tả có thể là chuỗi hoặc không có
                            'facebook' => 'nullable|url', // Link Facebook phải là URL hợp lệ (hoặc null)
                            'twitter' => 'nullable|url', // Link Twitter phải là URL hợp lệ (hoặc null)
                            'instagram' => 'nullable|url', // Link Instagram phải là URL hợp lệ (hoặc null)
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
            'name.required' => 'Trường tên là bắt buộc.',
        'name.max' => 'Tên không được vượt quá 255 ký tự.',
        'image.required' => 'Vui lòng chọn một hình ảnh.',
        'image.image' => 'Tệp tải lên phải là một hình ảnh.',
        'image.mimes' => 'Định dạng hình ảnh phải là jpeg, png, jpg, gif.',
        'image.max' => 'Kích thước hình ảnh không được vượt quá 5MB.',
        'email.required' => 'Trường email là bắt buộc.',
        'email.email' => 'Email không hợp lệ.',
        'email.unique' => 'Email đã được sử dụng.',
        'phone.required' => 'Trường điện thoại là bắt buộc.',
        'phone.max' => 'Số điện thoại không được vượt quá 20 ký tự.',
        'description.string' => 'Mô tả phải là chuỗi ký tự.',
        'facebook.url' => 'Định dạng đường dẫn Facebook không hợp lệ.',
        'twitter.url' => 'Định dạng đường dẫn Twitter không hợp lệ.',
        'instagram.url' => 'Định dạng đường dẫn Instagram không hợp lệ.',
        ];
    }
}
