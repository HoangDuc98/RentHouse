<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddHouseRequest extends FormRequest
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
            'name' => 'required|min:6',

            'address'=>'required'

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống!',
            'name.min' => 'Tên dài tối thiểu 6 kí tự',
            'address.required' => 'Địa chỉ nhà không được để trống',


        ];
    }
}
