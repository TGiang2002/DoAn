<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    //
    public function index(){
        return view ('dashboard.index');
    }

    public function login(){

        return view('dashboard.login.index');
    }

    public function postLogin(Request $request){
        $request->validate([
            'email'=>'required|Email',
            
        ],[
            'email.required'=>'Bạn chưa nhập Email',
            'password.required'=>'Bạn chưa nhập password',

        ]);
       
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
            return redirect('/TrangAdmin');
        }
        else{
           return back()->with('thongbao','Tài khoản hoặc mật khẩu không đúng');
        }
    }

}
