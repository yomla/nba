<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class RegisterController extends Controller
{
    public function __construct()
	{
		$this->middleware('guest');
	}


    public function create ()

    {
		return view('register.create');    	
    }

    public function store ()

    {
    	$this->validate(request(), [

    		'name' => 'required',
    		'email' => 'required|email|unique:users',
    		'password' => 'required|confirmed',
    		'password_confirmation' => 'required'

		]);

    	$user = new User;

    	$user->name = request('name');
    	$user->email = request('email');
    	$user->password = bcrypt(request('password'));

    	$user->save();

    	auth()->login($user);

    	return redirect('/');
    }
}

