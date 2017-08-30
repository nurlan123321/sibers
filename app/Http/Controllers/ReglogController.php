<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Register;
use Input;
use Validator;
use Redirect;

class ReglogController extends Controller
{
	// Registration = view - register.blade.php
    public function regview()
    {
    	return view('register');
    }

    // Registration = create
    public function regstore()
    {
    	$data = Input::except(array('_token'));

    	//Validation Register Form
    	$rule = array(
    		'name' => 'required',
    		'fam' => 'required',
    		'login' => 'required|unique:users,login,id',
    		'pol' => 'required',
    		'password' => 'required|min:6',
    		'datet' => 'required',
    		'email' => 'required|email',
		);

		$message = array(
			'login.required' => 'Заполните поле',
			'login.unique' => 'Такой логин уже используется',
			'password.required' => 'Заполните поле',
			'password.min' => 'Минимум 6 символов',
			'name.required' => 'Заполните поле',
			'datet.required' => 'Заполните поле',
			'pol.required' => 'Выберите пол',
			'fam.required' => 'Заполните поле',
			'email.required' => 'Заполните поле',
			'email.email' => 'Введите email'
		);
		$validator = Validator::make($data, $rule, $message);
		if ($validator->fails()) {
			return Redirect::to('register')->withErrors($validator);
		}else{
			// formstore() = Model - Register.php
			Register::formstore(Input::except(array('_token')));
			return Redirect::to('')->with('success', 'Удачно!');
		}
    }
    // Login view login.blade.php
    public function logview()
    {
    	return view('login');
    }

    // Authentication
    public function logstore(Request $r)
    {
    	$data = Input::except(array('_token'));

    	//Validation Login Form
    	$rule = array(
    		'login' => 'required',
    		'password' => 'required',
		);

    	$message = array(
			'login.required' => 'Заполните поле',
			'login.unique' => 'Такой логин уже используется',
			'password.required' => 'Заполните поле',
			'password.min' => 'Минимум 6 символов',
		);

		$validator = Validator::make($data, $rule, $message);
		if ($validator->fails()) {
			return Redirect::to('')->withErrors($validator);
		}else{
			
			// Login Form GET VALUE
    		$usersdata = array(
    			'login' => Input::get('login'), 
    			'password' => Input::get('password')
			);
			
			// Login and password Check
			if (Auth::attempt($usersdata)) {
				return Redirect::to('/users')->with('success', 'Ураа');
			}else{
				return Redirect::to('/');
			}
		}
    }
}
