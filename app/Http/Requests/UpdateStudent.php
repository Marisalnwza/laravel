<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudent extends FormRequest
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
        //dd($this->all());
        return [
            'id'         => 'required|exists:students,id',
            'student_id' => 'required|unique:students,student_id',
            'student_id' => 'required',
            'first_name' => 'required',
            'last_name'  => 'required',
            'nick_name'  => 'required',
            'year'       => 'required',
            'major'      => 'required',
            'factory'    => 'required',
        ];
    }
}
