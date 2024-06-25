<?php

// namespace App\Http\Requests;

// use Illuminate\Foundation\Http\FormRequest;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Validation\ValidationException;

// class LoginRequest extends FormRequest
// {
//     /**
//      * Determine if the user is authorized to make this request.
//      *
//      * @return bool
//      */
//     public function authorize()
//     {
//         // return false;
//         return true;
//     }

//     /**
//      * Get the validation rules that apply to the request.
//      *
//      * @return array
//      */
//     public function rules()
//     {
//         return  [
//             'email' => 'required|email|max:255',
//             'password' => 'required|string|min:8',      
//         ];
//     }

//     public function authenticate()
//     {
//         $credentials = $this->only('email', 'password');

//         if (!Auth::attempt($credentials, $this->boolean('remember'))) {
//             throw ValidationException::withMessages([
//                 'email' => __('auth.failed'),
//             ]);
//         }
//     }
// } 