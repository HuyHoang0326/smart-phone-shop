<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginAdminController extends Controller
{
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
            return redirect('LoginAdmin')->withErrors($validater);
        }
        else {
            $email = $request->input('email');
            $password = $request->input('password');
            $checkLogin = Auth::attempt(['email'=>$email, 'password'=>$password]);
            if($checkLogin == true){
                if(Auth::user()->permissions == 'admin'){
                    return redirect()->route('route_BackEnd_productList');
                }
                else{
                    Auth::logout();
                    Session::flash('error','quyền hạn tài khoản không đủ');
                    return redirect('LoginAdmin');
                }
            }
            else{
                Session::flash('error','sai email va mat khau');
                return redirect('LoginAdmin');
            }
        }
    }
}
