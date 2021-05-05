@extends('layouts.public')

@section('main-content')
<div class="mad-breadcrumb">
    <div class="container">
        <h1 class="mad-page-title mad-title-with-line">Change Password</h1>
        <nav class="mad-breadcrumb-path"><span><a href={{route('landingPage')}}>Home</a></span>/<span>Change Password</span>
        </nav>
    </div>
  </div>
<div class="mad-content pd-top-2 mad-content-sm-top">
    <div class="container medium-width">
        <div class="content-element-2">
            @if (session('error'))
            <div role="alert" class="mad-alert-box mad-alert-box--error">
                <div class="mad-alert-box-inner">{{ session('error') }}
                  <button type="button" class="mad-alert-box-close">Close</button>
                </div>
            </div>
            @endif
            @if ($errors->any())
            <div role="alert" class="mad-alert-box mad-alert-box--error">
                <div class="mad-alert-box-inner">
                 <button type="button" class="mad-alert-box-close">Close</button>
                 <ul>
                    @foreach ($errors->all() as $error)
                    <li>
                     {{$error}}
                    </li>  
                    @endforeach
                   
                  </ul>
                </div>
            </div>
            
            @endif
            <div class="row justify-content-center">
               
                <div class="col-lg-10">  
                    <form class="mad-msg-form" method="POST" action={{route('user.changepassword', Auth::user()->id)}} >
                        @csrf
                        
                        <div>
                        <label for="name" >{{ __('Current Password') }}</label>
                        
                            <input 
                                type="password" 
                                id="comment_name" 
                                name="current_password" 
                                class="form-control " 
                                required="true">
                        </div>
                           
                        
                        <div style="margin-top: 1.5rem">
                          <label for="name" >{{ __('New Password') }}</label>
                                
                            <input 
                                type="password" 
                                id="comment_name" 
                                name="new_password" 
                                class="form-control " 
                                required="true">
                        </div>
                           
                        
                        
                        <div style="margin-top: 1.5rem">
                            <label for="name" >{{ __('Confirm New Password') }}</label>
                                      
                                <input 
                                    type="password" 
                                    id="comment_name" 
                                    name="new_password_confirmation" 
                                    class="form-control " 
                                    required="true">
                        </div>
                                  
                       
                                                 
                    <button style="margin-top: 2.5rem" type="submit" class="btn btn-style-3">Change Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
  
@endsection