<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class New_categoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
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
        switch ($this->method()) :
            case 'POST' :
                switch ($currentAction):
                    case 'add':
                        //xây dựng rules validate trong này
                        $rules = [
                            'name'=>'required',
                            'description'=>'required',
                            
                        ];
                    break;
                endswitch;
                break;
        endswitch;
        return $rules;
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên',
            'name.string' => 'Vui lòng nhập tên',
            'name.max' => 'Bạn phải chứa nhiều nhất :max ký tự.',
            'name.unique' => 'Tên đã tồn tại trong hệ thống.',
            'description.required' => 'Vui lòng nhập mô tả',
        ];
    }
}
