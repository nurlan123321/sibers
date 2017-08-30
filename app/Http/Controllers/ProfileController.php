<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;
class ProfileController extends Controller
{
	// Profile function. Register - Model
    public function index($id)
    {
    	$users = Register::where('id', $id)->get();
    	return view('profile', [
    		'users' => $users
		]);
    }
}
