<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Notifications\NewStarter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'fresh-start/payment';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        //checks email domain to set admin permissions
        $explodedEmail = explode('@', $data['email']);
        $domain = array_pop($explodedEmail);
        if ($domain == 'leaner-living.com') {
          $user->admin = true;
          $user->save();
        }else {
          $user->admin = false;
          $user->save();
        }

        if (env('MAILGUN_DOMAIN')) {
          //sends email to admin to notify of new user registration
          $admin = User::where('email', env('ADMIN_EMAIL'))->first();
          if ($admin) {
            $admin->notify(new NewStarter($user));
          }
        }

        return $user;
    }
}
