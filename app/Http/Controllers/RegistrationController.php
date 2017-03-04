<?php

namespace App\Http\Controllers;

use App\User;
class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration.create');
    }

    public function store()
    {
    	// Run validations
    	$this->validate(request(), [
    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|confirmed'
		]);

    	// Create the user
    	$user = User::create([
    		'name' => request('name'),
    		'email' => request('email'),
    		'password' => bcrypt(request('password'))
		]);

    	// Log the user in
    	auth()->login($user);

    	//Redirect to tasks
    	return redirect()->home();
    }
}
