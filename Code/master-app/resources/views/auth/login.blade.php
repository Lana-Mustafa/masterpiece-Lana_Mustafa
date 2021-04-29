@extends('layouts.public')
@section('style')
<style>
body {
    font-family: sans-serif;
    margin: 0;
    line-height: 1.5;
}

* {
    box-sizing: border-box;
    margin: 0;
}

.login-page {
    min-height: 95vh;
    padding: 15px;
    background-color: #F5F4F0;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
}

.login-page .box {
    background-image: url('https://images.unsplash.com/photo-1544967919-44c1ef2f9e7a?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=968&q=80');
    background-size: cover;
    background-position: -160px center;
    background-repeat: repeat-x;
    flex: 0 0 700px;
    max-width: 700px;
    min-height: 480px;
    box-shadow: 0 0 10px #dddddd;
    display: flex;
    flex-wrap: wrap;
    position: relative;
    z-index: 1;
    transition: all 0.5s ease-in-out;
}

.login-page .box.slide-active {
    background-position: 160px center;
}

.login-page .box::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    background-color: rgba(0, 0, 0, 0.4);
}

.login-page .box .left,
.login-page .box .right {
    flex: 0 0 50%;
    max-width: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 40px 0;
}

.login-page .box .left h3,
.login-page .box .right h3 {
    font-size: 30px;
    color: #ffffff;
    margin: 0 0 15px;
}

.login-page .box .left .register-btn,
.login-page .box .right .login-btn {
    background-color: transparent;
    padding: 10px 35px;
    color: #ffffff;
    border: 1px solid #ffffff;
    font-size: 16px;
    cursor: pointer;
    border-radius: 25px;
}

.login-page .box .left .register-btn:focus,
.login-page .box .right .login-btn:focus {
    outline: none;
}

.login-page .box .form {
    position: absolute;
    background-color: #ffffff;
    height: 100%;
    width: 50%;
    right: 0;
    top: 0;
    padding: 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    transition: all 0.5s ease-in-out;
}

.login-page .box.slide-active .form {
    right: 50%;
}


.login-page .box .form h3 {
    font-size: 20px;
    color: #000000;
    margin: 0 0 30px;
}

.login-page .box .form .form-group {
    margin-bottom: 20px;
}

.login-page .box .form .lost-password-form,
.login-page .box .form .login-form,
.login-page .box .form .register-form {
    transition: all 0.5s ease-in-out;
}

.login-page .box .form .form-control {
    width: 100%;
    height: 5vh;
    font-size: 16px;
    color: #000000;
    border: none;
    border-bottom: 1px solid #cccccc;
    padding: 0;
}

.login-page .box .form .form-control:focus {
    outline: none;
}

.login-page .box .form label {
    font-size: 14px;
    color: #555555;
    margin-left:  15px;
    margin-top:   15px;
}

.login-page .box .form .submit-btn {
    width: 100%;
    height: 40px;
    background-color: #D69080;
    border: none;
    border-radius: 20px;
    color: #ffffff;
    text-transform: uppercase;
    margin-top: 10px;
    font-size: 16px;
    cursor: pointer;
}

.login-page .box .form .submit-btn:focus {
    outline: none;
}

.login-page .box .form p {
    margin-top: 20px;
    text-align: center;
}

.login-page .box .form h5 {
    font-size: 16px;
    color: #555555;
    margin: 0 0 30px;
    font-weight: normal;
}

.login-page .box .form p a {
    font-size: 16px;
    text-decoration: none;
    display: inline-block;
    color: #3f51b5;
}

.login-page .box .form .form-hidden {
    max-height: 0;
    visibility: hidden;
    opacity: 0;
    overflow: hidden;
}


/*responsive*/

@media(max-width: 767px) {
    .login-page .box {
        flex: 0 0 100%;
        max-width: 100%;
        
    }

.login-page .box .left,
.login-page .box .right {
    flex: 0 0 100%;
    max-width: 100%;
    display: flex;
    justify-content: center;
    flex-direction: column;
   
}
}

@media(max-width: 575px) {
    .login-page {
        min-height: 113vh;
    
    }   
    .login-page .box .form {
        width: 100%;
        position: relative;
        right: auto;
        top: auto;
        height: auto;
    }

    .login-page .box,
    .login-page .box.slide-active {
        background-position: center;
      
    }

    .login-page .box .left h3,
    .login-page .box .right h3 {
        font-size: 16px;
    }

    .login-page .box.slide-active .form {
        right: auto;
    }


}
</style>
@endsection

@section('main-content')
<div style=" background-color: #F5F4F0; padding-top:2rem; padding-bottom:0"  class="mad-breadcrumb">
    <div class="container">
      <h1 class="mad-page-title mad-title-with-line">Login As Buyer</h1>
      <nav class="mad-breadcrumb-path"><span><a href="index.html">Home</a></span>/<span>Login Form</span>
      </nav>
    </div>
  </div>
    
                <div class="login-page">
                    <div class="box">
                        
                        <div class="left">
                            <h3>Create Account</h3>
                            <a  href={{route('register')}} class="btn  register-btn">Register</a>
                        </div>
                        <div class="form">
                           
                            <!-- Login form Start -->
                            <div class="login-form">
                                <h3>Log In</h3>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                

                                <div class="form-group">
                                    <label for="name" > {{ __('Email') }} </label>
                                    
                                    <input type="email"  
                                           class="form-control 
                                           @error('email') is-invalid @enderror" 
                                           name="email" 
                                           value="{{ old('email') }}" 
                                           required 
                                           autocomplete="email">
                                    @error('email')
                                     <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                     </span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label for="name" > {{ __('Password') }} </label>
                                    <input type="password" 
                                           class="form-control 
                                           @error('password') is-invalid @enderror" 
                                           name="password"
                                           required 
                                           autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                                </div>
                                

                                <button type="submit" class="submit-btn">Login</button>
                                
                            </form>
                            </div>
                            <!-- Login form End -->
            
                           
            
                        </div>
                    </div>
                </div>
         
     
  

@endsection







