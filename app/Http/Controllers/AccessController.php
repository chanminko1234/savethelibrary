<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccessController extends Controller
{
    //
	public function getLogin() {
		return view("backend.login");
	}

	public function postLogin(Request $request) {

		
		$this->validate($request, [
			'email' => 'required|email',
			'password' => 'required'
			]);

		$credentials = [
		'email'     => $request->input('email'),
		'password'  => $request->input('password')
		];

		if(!$request->input('remember_me')) {
			$user = \Sentinel::authenticate($credentials);
		} else {
			$user = \Sentinel::authenticateAndRemeber($credentials);
		}
		if(!$user) {
			\Alert::error('Something wrong with your login', 'Login Failed')->persistent("Close");
			return redirect()->to('backend/login');
		} else {
			return redirect()->to('backend');
		}

	}

	public function getRegister() {
		return view("backend.register");
	}

	public function postRegister(Request $request) {

		$this->validate($request, [
			'name'      => 'required|min:4',
			'email'     => 'required|unique:users|email',
			'password'  => 'required|min:4|confirmed',
			'password_confirmation' => 'same:password',
			'terms_and_condition' => 'accepted'
			]);

		$credentials = [
		'first_name'    => $request->input('name'),
		'email'         => $request->input('email'),
		'password'      => $request->input('password'),
		];

		$user = \Sentinel::register($credentials);
		$activation = \Activation::create($user);
		var_dump("http://savethelibrary.dev/activate/". $user->id . "/" . $activation['code']);

	}

	public function logout() {
		\Sentinel::logout();
		return redirect()->to("backend/login");
	}
}
