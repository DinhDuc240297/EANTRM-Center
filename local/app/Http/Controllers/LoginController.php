<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
    //
    public function getLogin(){
    	return view('Login.Login');
    }
    public function postLogin(Request $request){
    	$rules = [
    		'email' => 'required|email',
    		'password' => 'required|min:8'
        	];
        $messages = [
        	'email.required' => 'Email là trường bắt buộc.',
        	'password.required' => 'Mật khẩu là trường bắt buộc.'
        ];
        $validator = validator::make($request->all(),$rules, $messages);

        if ($validator->fails()) {
        	# code...
        	return redirect()->back()->withErrors($validator)->withInput();
        }
        else {
        	$email = $request->input('email');
        	$password = $request->input('password');

        	if (Auth::attempt(['email' => $email,'password' => $password]))
        		{
        			// dd('Dang nhap thanh cong');
        			return redirect()->intended('/');
        		}
        	else {
        		$errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không chính xác.']);
        		return redirect()->back()->withInput()->withErrors($errors);
        	}

        }
    }
}