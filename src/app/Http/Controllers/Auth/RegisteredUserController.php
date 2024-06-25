<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
// use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisteredUserController extends Controller
{
	public function create()
	{
		return view('auth.register');
	}

	public function store(Request $request)
	{

		$validator = Validator::make($request->all(), [
			'name' => ['required', 'string', 'max:255'],
			'email' => ['required', 'string', 'email', 'unique:users'],
			'password' => ['required', 'string', 'min:8', 'confirmed'],
		]);

		if ($validator->fails()) {
			return redirect('register')
				->withErrors($validator)
				->withInput();
		}

		// Userテーブルへの登録
		$user = User::create([
			'name' => $request->name,
			'email' => $request->email,
			'password' => Hash::make($request->password),
		]);

		Auth::login($user);

		// 会員登録の履歴を保存
		// User::create([
		// 	'user_id' => $user->id,
		// 	'activity_type' => 'register',
		// ]);

		// return redirect()->route('shops.index');
		return redirect()->intended('/');
		// return redirect('/thank-you'); 
		// 登録完了ページへのリダイレクト
	}
}
