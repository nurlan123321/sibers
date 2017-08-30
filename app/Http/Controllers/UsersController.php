<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;
use Redirect;
use Input;
use Validator;

class UsersController extends Controller
{
    // Users view users.blade.php
    public function index()
    {
    	$users = Register::orderBy('id', 'DESC')->paginate(4);
    	return view('users', [
    		'users' => $users
		  ]);
    }

    // User Delete Function
    public function destroy($id)
    {
   		$user = Register::find($id);
   		$user->delete();
   		return Redirect::to('users')->with('success', 'Удачно!');
    }

    // Create User View createuser.blade.php
    public function createuser()
    {
      return view('createuser');
    }

    // User store
    public function createUs()
    {
      $data = Input::except(array('_token'));

      //Validation Create User Form
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
        return Redirect::to('create')->withErrors($validator);
      }else{
        // formstore() = Model - Register.php
        Register::formstore(Input::except(array('_token')));
        return Redirect::to('users')->with('success', 'Удачно!');
      }
    }

    // Get View updateuser.blade.php
    public function updateuser($id)
     {
        $user = Register::find($id);
        return view('updateuser', [
          'user' => $user
        ]);
     }

    // Update function
    public function updateUs(Request $r, $id)
    {
      $users = array(
        'name' => $r->input('name'),
        'fam' => $r->input('fam'),
        'login' => $r->input('login'),
        'pol' => $r->input('pol'),
        'password' => $r->input('password'),
        'datet' => $r->input('datet'),
        'email' => $r->input('email')
      );
      Register::where('id', $id)->update($users);
      return Redirect::to('users')->with('success', 'Удачно!');
    }
}