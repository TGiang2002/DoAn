<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\Email;

class LoginController extends Controller
{
    //

    public function login(){

        return view('front.Login.login');
    }

    ///thực hiện đăng nhập
    public function store(Request $request){
        $request->validate([
            'email'=>'required|Email',
            
        ],[
            'email.required'=>'Bạn chưa nhập Email',
            'password.required'=>'Bạn chưa nhập password',

        ]);
       
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
            return redirect('/');
        }
        else{
           return back()->with('thongbao','Tài khoản hoặc mật khẩu không đúng');
        }
    }

    public function register(){

        return view('front.login.register');
    }

    public function postRegister(Request $request){
        $request->validate([
            'name'=>'required|min:6',
            'email'=>'required|Email',
            'password'=>'required|min:6'
            
        ],[
            'name.required'=>'Bạn chưa nhập Name',
            'email.required'=>'Bạn chưa nhập Email',
            'password.required'=>'Bạn chưa nhập password',

        ]);  
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);
        return redirect('/login');
    }
}


