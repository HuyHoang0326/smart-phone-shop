<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginControlller extends Controller
{
    //
    public function getLogin(){
        return view('auth.login');
    }

    public function postLogin(Request $request){
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
            'permission'
        ];
        $messages =[
            'email.required' => 'nhập email',
            'email.email' =>  'nhập sai email',
            'password.required' => 'nhap password',
        ];
        $validater = Validator::make($request->all(),$rules,$messages); 
        if($validater->fails()){
            return redirect('login')->withErrors($validater);
        }
        else {
            $email = $request->input('email');
            $password = $request->input('password');
            if(Auth::attempt(['email'=>$email, 'password'=>$password])){
                return redirect('login');
            }
            else{
                Session::flash('error','sai email va mat khau');
                return redirect('login');
            }
        }
    }
}

