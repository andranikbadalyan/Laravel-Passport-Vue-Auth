<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;

class RegisterController extends Controller
{
    /**
     * Register the given user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $this->validate($request, $this->rules(), $this->validationErrorMessages());

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt( $request->password );
        $user->save();

        return (new LoginController())->login($request);
    }

    /**
     * Get the user registration validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        return [
            'name' => 'required|string|max:80',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ];
    }

    /**
     * Get the user registration validation error messages.
     *
     * @return array
     */
    protected function validationErrorMessages()
    {
        return [];
    }
}
