<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    
    protected $redirectTo = '/home';

    
    public function __construct()
    {
        $this->middleware('guest');
    }

    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'rol' => 'required|string|max:10',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

   
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'rol' => $data['rol'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
