@extends('layouts.dashboard')

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
  {{-- @if (session()->get('message'))
      <div class="alert alert-success" role="alert">
           {{session()->get('message')}}
      </div>
  @endif --}}
        <div class="card ">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">account_box</i>
            </div>
            <h4 class="card-title">Edit Profile</h4>
          </div>
          <div class="card-body ">
            <form class="form-horizontal"method="POST" action= {{route('admin.updateProfile', Auth::user()->id)}} enctype="multipart/form-data">
                @csrf
              
                
            <div class="row">
                    <label class="col-md-3 col-form-label">Name</label>
                    <div class="col-md-9">
                      <div class="form-group has-default">
                        <input 
                           name="name" 
                           type="text" 
                           class="form-control "
                           value="{{Auth::user()->name}}"
                           required="true">
                          
                      </div>
                      @error('name')
                      <div class="text-danger mt-2">{{ $message }}</div>   
                      @enderror
                    </div>
                    
              </div>
              <div class="row">
                <label class="col-md-3 col-form-label">Mobile</label>
                <div class="col-md-9">
                  <div class="form-group has-default">
                    <input 
                       name="mobile" 
                       type="text" 
                       class="form-control"
                       value="{{Auth::user()->mobile}}"
                       required="true">
                       
                  </div>
                      @error('mobile')
                       <div class="text-danger mt-2">{{ $message }}</div>   
                       @enderror
                </div>
                
              </div>
              <div class="row">
                <label class="col-md-3 col-form-label">Email</label>
                <div class="col-md-9">
                  <div class="form-group has-default">
                    <input 
                       name="email"  
                       type="email" 
                       class="form-control "
                       value="{{Auth::user()->email}}"
                       required="true">
                       
                  </div>
                      @error('email')
                       <div class="text-danger mt-2">{{ $message }}</div>   
                       @enderror
                </div>
                
              </div>
               
           </div>
          <div class="card-footer ">
            <div class="row">
              <div class="col-md-9">
                <button type="submit" class="btn btn-fill btn-primary">Update</button>
              </div>
            </div>
          </div>
        </form>
        </div>
      </div>

<div class="col-md-2"></div>
</div>

@endsection