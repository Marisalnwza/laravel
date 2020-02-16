<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStudent extends FormRequest
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
            'student_id' => 'required|unique:students,student_id',
            'first_name' => 'required',
            'last_name'  => 'required',
            'nick_name'  => 'required',
            'year'       => 'required',
            'major'      => 'required',
            'factory'    => 'required',
            'province'     => 'required',
            'district'     => 'required',
            'sub_district' => 'required',
            'post_code'    => 'required',
            'total_person' => 'required',
            'status_live'  => 'required|in:yes,no',
        ];
    }
}
