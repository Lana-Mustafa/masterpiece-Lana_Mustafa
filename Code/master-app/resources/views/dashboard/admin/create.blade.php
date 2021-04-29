@extends('layouts.dashboard')

@section('main-content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card ">
              <div class="card-header card-header-primary card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">supervisor_account</i>
                </div>
                <h4 class="card-title">Create Admin</h4>
              </div>
              <div class="card-body ">
                <form method="post"action="{{route('admins.store')}}" class="form-horizontal">
                    @csrf
                  <div class="row">
                    <label class="col-md-3 col-form-label">Name</label>
                    <div class="col-md-9">
                      <div class="form-group has-default">
                        <input 
                           name="name" 
                           type="text" 
                           class="form-control "
                           value="{{old('name')}}"
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
                           value="{{old('mobile')}}"
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
                           value="{{old('email')}}"
                           required="true">
                          
                      </div>
                      @error('email')
                      <div class="text-danger mt-2">{{ $message }}</div>   
                      @enderror
                    </div>
                    
                  </div>
                  <div class="row">
                    <label class="col-md-3 col-form-label">Password</label>
                    <div class="col-md-9">
                      <div class="form-group">
                        <input 
                           name="password" 
                           type="password" 
                           class="form-control"  
                           value="{{old('password')}}"
                           required="true">
                           
                      </div>
                           @error('password') 
                           <div class="text-danger mt-2">{{ $message }}</div>   
                           @enderror
                    </div>
                   
                  </div>
                  
                  <div class="card-footer mt-5 ">
                    <div class="row">
                       
                      <div class="col-md-9 ">
                        <button type="submit" class="btn btn-fill btn-primary">Create</button>
                      </div>
                     
                    </div>
                  </div>
                </form>
              </div>
             
            </div>
          </div>
        <div class="col-md-2"></div>
    </div>
@endsection