<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
           'username' => 'required|min:5|max:12',
           'name' => 'required|min:5|max:12',
           'email' => 'required|email|max:255|unique:users',
           'password' => 'required|confirmed|min:6',  
           //regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/
           'mobile' => 'required',
           'gender' => 'required',
           'membership' => 'required'
           // 'friend_code' => 'required|exists:referals,friend_code'
        ];
    }

    // public function messages()
    // {
    //     return [
    //       'username.required' => 'Silahkan masukkan Username Anda.',
    //       'username.min' => 'Username min 5 sampai 12 karakter.', 
    //       'username.max' => 'Username min 5 sampai 12 karakter.', 
    //       'name.required' => 'Silahkan masukkan Name Lengkap Anda.',
    //       'name.min' => 'Name min 5 sampai 12 karakter.', 
    //       'name.max' => 'Name min 5 sampai 12 karakter.', 
    //       'email.required' => 'Silahkan masukkan Email Anda.',
    //       'email.email' => 'Silahkan masukkan Email Anda.',
    //       'email.unique:users' => 'Email Sudah ada.',
    //       'mobile.required' => 'Silahkan masukkan no Handphone Anda.',
    //       'gender.required' => ' ',

    //     ];
    // }
}
