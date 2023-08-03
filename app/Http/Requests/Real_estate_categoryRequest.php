<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Real_estate_categoryRequest extends FormRequest
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
                        ];
                        return $rules;
                        break;
                    case 'update':
                        // xây dựng rules validate trong này
                        $rules = [
                            'name' => 'required|string|max:255',
                            'description' => 'required|string',
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
        ];
    }
}
