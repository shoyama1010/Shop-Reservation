<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	public function mypage()
	{
		return view('mypage', ['user' => Auth::user()]);
	}

}
