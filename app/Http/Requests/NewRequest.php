<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewRequest extends FormRequest
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
                            'title' => 'required|string|max:255',
                            'description' => 'required|string',
                            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', // Đảm bảo file ảnh hợp lệ và có kích thước tối đa là 5MB
                            'news_category_id' => 'required|exists:new_categories,id', // Kiểm tra xem news_category_id tồn tại trong bảng news_categories
                            'long_description' => 'nullable|string',
                        ];
                        return $rules;
                        break;
                    case 'update':
                        // xây dựng rules validate trong này
                        $rules = [
                            'title' => 'required|string|max:255',
                            'description' => 'required|string',
                            'image' => 'image|mimes:jpeg,png,jpg,gif|max:5120', // Đảm bảo file ảnh hợp lệ và có kích thước tối đa là 5MB
                            'news_category_id' => 'required|exists:new_categories,id', // Kiểm tra xem news_category_id tồn tại trong bảng news_categories
                            'long_description' => 'nullable|string',
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
            'title.required' => 'Trường tiêu đề là bắt buộc.',
            'title.max' => 'Tiêu đề không được vượt quá 255 ký tự.',
            'description.required' => 'Trường mô tả là bắt buộc.',
            'image.required' => 'Vui lòng chọn một hình ảnh.',
            'image.image' => 'Tệp tải lên phải là một hình ảnh.',
            'image.mimes' => 'Định dạng hình ảnh phải là jpeg, png, jpg, gif.',
            'image.max' => 'Kích thước hình ảnh không được vượt quá 5MB.',
            'news_category_id.required' => 'Trường danh mục tin tức là bắt buộc.',
            'news_category_id.exists' => 'Danh mục tin tức không tồn tại.',
            'long_description.string' => 'Mô tả dài phải là chuỗi ký tự.',
        ];
    }
}
