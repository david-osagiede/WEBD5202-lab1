<?php

namespace App\Http\Controllers;

// use App\Models\User;

// use App\Mail\Welcome;

use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
    public function create()
    {
        return view ('registration.create');
    }
    public function store(RegistrationForm $form)
    {
        $form->persist();

        // session('message', 'here is a default message');
        session()->flash('message', 'thanks so much for signing up!');
        //validate the form
        // $this->validate(request(), [
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required|confirmed',
        // ]);
        // Create and save the user
        // $user = User::create([
        //     'name' => request('name'),
        //     'email' => request('email'),
        //     'password' => bcrypt(request('password')),
        //     ]);
        //sign them in
        // \Auth::login();
        // auth()->login($user);

        // \Mail::to($user)->send(new Welcome($user));
        //redirect to the homepage
        return redirect()->home();
    }
}
