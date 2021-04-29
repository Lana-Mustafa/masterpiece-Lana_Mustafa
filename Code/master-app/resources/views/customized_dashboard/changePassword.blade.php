@extends('layouts.customized_dashboard')

@section('main-content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      @if (session('error'))
          <div class="alert alert-danger" role="alert">
               {{ session('error') }}
          </div>
      @endif
      @if ($errors->any())
          <div class="alert alert-danger" >
              <ul>
                @foreach ($errors->all() as $error)
                <li>
                 {{$error}}
                </li>  
                @endforeach
               
              </ul>
          </div>
      @endif
      @if (session()->get('message'))
          <div class="alert alert-success" role="alert">
               {{session()->get('message')}}
          </div>
      @endif

        <div class="card ">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">password</i>
            </div>
            <h4 class="card-title">Change Password</h4>
          </div>
          <div class="card-body ">
            <form class="form-horizontal"method="POST" action= {{route('supplier.changepassword')}} enctype="multipart/form-data">
                @csrf
              
               
            <div class="row">
                    <label class="col-md-3 col-form-label">Current Password</label>
                    <div class="col-md-9">
                      <div class="form-group has-default">
                        <input 
                           name="current_password" 
                           type="password" 
                           class="form-control "
                           required="true">
                          
                      </div>
                      
                    </div>
                    
              </div>

              <div class="row">
                <label class="col-md-3 col-form-label">New Password</label>
                <div class="col-md-9">
                  <div class="form-group has-default">
                    <input 
                       name="new_password" 
                       type="password" 
                       class="form-control "
                       required="true">
                      
                  </div>
                 
                </div>
                
          </div>
          <div class="row">
            <label class="col-md-3 col-form-label">Confirm New Password</label>
            <div class="col-md-9">
              <div class="form-group has-default">
                <input 
                   name="new_password_confirmation" 
                   type="password" 
                   class="form-control "
                   required="true">
                  
              </div>
            
            </div>
            
      </div>
           </div>
          <div class="card-footer ">
            <div class="row">
              <div class="col-md-9">
                <button type="submit" class="btn btn-fill btn-primary">Change Password</button>
              </div>
            </div>
          </div>
        </form>
        </div>
      </div>

<div class="col-md-2"></div>
</div>

@endsection