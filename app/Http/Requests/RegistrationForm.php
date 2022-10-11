<?php

namespace App\Http\Requests;

use App\Models\User;

use App\Mail\Welcome;
use illuminate\Support\Facades\Mail;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ];
    }
    public function persist()
    {

        // Create and save the user
        $user = User::create(
            $this->only(['name', 'email', 'password'])
            // 'name' => request('name'),
            // 'email' => request('email'),
            // 'password' => bcrypt(request('password')),
        );
        //sign them in
        // \Auth::login();
        auth()->login($user);

        \Mail::to($user)->send(new Welcome($user));
    }
}
