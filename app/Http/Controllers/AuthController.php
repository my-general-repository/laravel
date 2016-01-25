<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function getLogin() {
        if(!Auth::check()) {
            return view('admin/login');
        } else {
            return redirect('admin');
        }
    }
    
    public function postLogin(Request $request) {
        $data = $request->all();
        $rules = array(
        	'username' => 'required|min:4',
        	'password' => 'required|min:6|max:20',
        );
        $rulesMessages = array( 
        	'username.required' => 'Потребителското име е задължително!',
        	'password.required' => 'Паролата е задължителна!',
        	'password.min' => 'Паролата не трябва да бъде по-малка от 6 символа!',
        	'password.max' => 'Паролата не трябва да бъде по-голяма от 20 символа!'
        );
        $validator = Validator::make($data, $rules, $rulesMessages);
        if($validator->fails()) {
        	return redirect('login')->withErrors($validator)->withInput();
        } else {
            
        }
    }
    
    public function getLogout() {
        
    }
    
    //DB::insert('insert into users (username, password, role) values (?, ?)', [$username, $password, 'admin']);
}
