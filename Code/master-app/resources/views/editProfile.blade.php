@extends('layouts.public')

@section('main-content')
<div class="mad-breadcrumb">
    <div class="container">
        <h1 class="mad-page-title mad-title-with-line">Edit Account</h1>
        <nav class="mad-breadcrumb-path"><span><a href="index.html">Home</a></span>/<span>Edit Account</span>
        </nav>
    </div>
  </div>
<div class="mad-content pd-top-2 mad-content-sm-top">
    <div class="container medium-width">
        <div class="content-element-2">
            <div class="row justify-content-center">
               
                <div class="row justify-content-center col-lg-10"> 
                    <div class="mad-product-image ">
                        <img src="/images/users/default.png" class="rounded img-thumbnail" width="120vw" height="120vh" alt="">
                      </div>
                </div>
               
                <div class="col-lg-10">  
                    <form class="mad-msg-form" method="POST" action={{route('user.updateProfile', Auth::user()->id)}} enctype="multipart/form-data">
                        @csrf
                        
                        <div>
                        <label for="name" >{{ __('Name') }}</label>
                        
                            <input 
                                type="text" 
                                id="comment_name" 
                                name="name" 
                                class="form-control "
                                value="{{Auth::user()->name}}" 
                                required="true">
                        </div>
                            @error('name')
                            <div class="text-danger mt-2">{{ $message }}</div>   
                            @enderror
                        
                        <div style="margin-top: 1.5rem"> 
                        <label for="name" > {{ __('Email') }} </label>   
                            <input 
                                type="email"
                                id="comment_email" 
                                name="email" 
                                class="form-control"
                                value="{{Auth::user()->email}}" 
                                required="true">
                        </div>
                            @error('email')
                            <div class="text-danger mt-2">{{ $message }}</div>   
                            @enderror
                        
            
                        <div style="margin-top: 1.5rem"> 
                            <label for="name" > {{ __('Mobile') }} </label>   
                            <input 
                                type="text"
                                id="comment_email" 
                                name="mobile" 
                                class="form-control"
                                value="{{Auth::user()->mobile}}" 
                                required="true">
                        </div>
                                @error('mobile')
                                <div class="text-danger mt-2">{{ $message }}</div>   
                                @enderror    
                                
                        <div style="margin-top: 1.5rem"> 
                            <label for="name" > {{ __('Upload Img') }} </label>   
                            <input 
                                type="file"
                                id="comment_email" 
                                 name="img" 
                                class="form-control"
                                >
                        </div>
                                                 
                    <button style="margin-top: 1.5rem" type="submit" class="btn btn-style-3">Update</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
  
@endsection