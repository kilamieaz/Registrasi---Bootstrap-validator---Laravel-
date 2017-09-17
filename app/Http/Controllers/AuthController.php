<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use App\Http\Requests\LoginRequest;
use App\User;
use Auth;
use Mail;
use Random;
use App\Referal;
 
class AuthController extends Controller
{
    public function register()
    {
    	return view('registration.registration');
    }

    public function login()
    {
        return view('login.login');
    }

    public function doRegister(RegistrationRequest $request)
    {
        //buat data referal
        // dd($request);
        $int = Random::generateInt(5, 12);
        $code = Random::generateString($int,'123456789qwertyuiopasdfghjklzxcvbnm');
        //buat user
    	$input = $request->all();
        $friend = $input['friend_code'];
    	$password = bcrypt($request->input('password')); 
        $input['password'] = $password;
	    $input['code_referal'] = $code;
	    $register = User::create($input);
        //buat referal list

        //buat referal relationship
        $user = Auth::user();
        $code = Referal::where('friend_code', $friend)->first();
        $referal= referal::create([
            'user_code' => $input['code_referal'],                
            'friend_id' => $code->id,              
            'friend_code'  => $code->friend_code
        ]);
	    return redirect()->route('login');
    }

    public function doLogin(LoginRequest $request)
    {
    	$credentials = $request->only('email', 'password');
    	if (Auth::attempt($credentials)) {
    		return 'Berhasil Log in';
    	}else {
    		return 'email dan password salah';
    	}
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect()->route('index');
    }
}
