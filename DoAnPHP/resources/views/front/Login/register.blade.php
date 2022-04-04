@extends('front.layout.master')

@section('title','Register')

@section('body')
    <!------->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i class="fa fa-home"></i>Home</a>
                        <span>Register</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------------->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Register</h2>
                        @if($errors->any())
                            <div class="mt-2 my-2 text-center" style="color:red;">
                                @foreach($errors->all() as $err)
                                    {{$err}}
                                @endforeach
                            </div>
                        @endif
                        <form action="" method="POST" >
                            @csrf
                            <div class="group-input">
                                <label for="username">UserName</label>
                                <input type="text" name="name" id="username" > 
                            </div>
                            <div class="group-input">
                                <label for="username">Email</label>
                                <input type="text" name="email" id="email" > 
                            </div>
                            <div class="group-input">
                                <label for="pass">Password</label>
                                <input type="password"name="password" id="pass">
                            </div>
                            <div class="group-input">
                                <label for="con-pass">Confirm Password</label>
                                <input type="password" name="conpass" id="con-pass">
                            </div>
                            
                            <button type="submit" class="site-btn register-btn">Register</button>
                        </form>
                        <div class="switch-login">
                            <a href="./login" class="or-login">Or Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----------->
  @endsection