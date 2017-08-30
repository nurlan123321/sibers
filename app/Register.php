<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Register extends Authenticatable
{
    // Table Mysql
	protected $table = 'users';

    // Query - create - Database
    public static function formstore($data)
    {
    	$name = Input::get('name');
    	$fam = Input::get('fam');
    	$login = Input::get('login');
    	$datet = Input::get('datet');
    	$pol = Input::get('pol');
    	$password = Hash::make(Input::get('password'));
    	$email = Input::get('email');

    	$users = new Register();
    	$users->name = $name;
    	$users->fam = $fam;
    	$users->login = $login;
    	$users->pol = $pol;
    	$users->datet = $datet;
    	$users->password = $password;
    	$users->email = $email;
    	$users->save();
    }
}
