<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest
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
        //$id = $this->user;
        return [
            //'name' => 'required|max:255|unique:users,name,' . $id,
            //'name' => 'required|max:255|unique:users,name,',
            'name' => ['required',
                        'max:255',
                        Rule::unique('users')->ignore($this->user)],
            //'email' => 'required|email|unique:users,email,' . $id,
            'email' => ['required',
                        'email',
                        Rule::unique('users')->ignore($this->user)],
            //'password' => 'required',
            'admin' => '',
        ];
    }
}
