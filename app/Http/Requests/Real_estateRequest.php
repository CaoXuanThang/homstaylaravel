<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Real_estateRequest extends FormRequest
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
        //lấy ra tên phương thức cần xử lý
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
                            'description' => 'required|string',
                            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', // Đảm bảo file ảnh hợp lệ và có kích thước tối đa là 5MB
                            'price' => 'required|numeric|min:0',
                            'address' => 'required|string',
                            'baths' => 'required|integer|min:0',
                            'beds' => 'required|integer|min:0',
                            'real_estate_category_id' => 'required|exists:real_estate_categories,id', // Kiểm tra xem real_estate_category_id tồn tại trong bảng real_estate_categories
                            'designer_id' => 'required|exists:designers,id', // Kiểm tra xem designer_id tồn tại trong bảng designers
                        ];
                        return $rules;
                        break;
                    case 'update':
                        // xây dựng rules validate trong này
                        $rules = [
                            'name' => 'required|string|max:255',
                            'description' => 'required|string',
                            'image' => 'image|mimes:jpeg,png,jpg,gif|max:5120', // Đảm bảo file ảnh hợp lệ và có kích thước tối đa là 5MB
                            'price' => 'required|numeric|min:0',
                            'address' => 'required|string',
                            'baths' => 'required|integer|min:0',
                            'beds' => 'required|integer|min:0',
                            'real_estate_category_id' => 'required|exists:real_estate_categories,id', // Kiểm tra xem real_estate_category_id tồn tại trong bảng real_estate_categories
                            'designer_id' => 'required|exists:designers,id', // Kiểm tra xem designer_id tồn tại trong bảng designers
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
            'description.required' => 'Trường mô tả là bắt buộc.',
            'image.required' => 'Vui lòng chọn một hình ảnh.',
            'image.image' => 'Tệp tải lên phải là một hình ảnh.',
            'image.mimes' => 'Định dạng hình ảnh phải là jpeg, png, jpg, gif.',
            'image.max' => 'Kích thước hình ảnh không được vượt quá 5MB.',
            'price.required' => 'Trường giá là bắt buộc.',
            'price.numeric' => 'Giá phải là một số.',
            'price.min' => 'Giá phải lớn hơn hoặc bằng 0.',
            'address.required' => 'Trường địa chỉ là bắt buộc.',
            'baths.required' => 'Trường số phòng tắm là bắt buộc.',
            'baths.integer' => 'Số phòng tắm phải là số nguyên.',
            'baths.min' => 'Số phòng tắm phải lớn hơn hoặc bằng 0.',
            'beds.required' => 'Trường số phòng ngủ là bắt buộc.',
            'beds.integer' => 'Số phòng ngủ phải là số nguyên.',
            'beds.min' => 'Số phòng ngủ phải lớn hơn hoặc bằng 0.',
            'real_estate_category_id.required' => 'Trường danh mục bất động sản là bắt buộc.',
            'real_estate_category_id.exists' => 'Danh mục bất động sản không tồn tại.',
            'designer_id.required' => 'Trường nhà thiết kế là bắt buộc.',
            'designer_id.exists' => 'Nhà thiết kế không tồn tại.',
        ];
    }
}
