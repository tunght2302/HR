<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
	protected $user;
	public function __construct()
	{
		$this->user = new User();
	}

	public function login()
	{
		return view('Auth.login');
	}

	public function forgotPassword()
	{
		return view('Auth.forgot_password');
	}

	public function register()
	{
		return view('Auth.register');
	}

	public function registerPost(RegisterRequest $request)
	{
		try {
			$user = $this->user::create($request->validated());
			$user->password = Hash::make($request->password);
			$user->save();

			return redirect()->back()->with('success', 'Registration successfully');
		} catch (Exception $e) {
			Log::debug($e->getMessage());

			return redirect()->back()->with('error', 'Registration failed');
		};
	}

	public function loginPost(LoginRequest $request)
	{
		try {
			// dd($request->all());
			if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {

				if (Auth::user()->is_role == '1') {
					return redirect()->intended('admin/dashboard');
				} else {
					return redirect('/')->with('error', 'No HR Available please check');
				}
			} else {
				return redirect()->back()->with('error', 'Vui lòng nhập đúng email và mật khẩu ');
			}
		} catch (Exception $e) {
			Log::debug($e->getMessage());
			return redirect()->back()->with('error', 'Login failed');
		};
	}

	public function logout()
	{
		Auth::logout();
		return redirect()->back()->with('success', 'Đăng xuất thành công');
	}
}
