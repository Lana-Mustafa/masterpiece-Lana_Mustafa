@extends('layouts.auth_dashboard')


@section('title')
Login Page   
@endsection

@section('content')

<div class="page-header login-page header-filter" filter-color="black" style="background-image: url('{{ asset('dashboard-assets/img/login.jpg')}}'); background-size: cover; background-position: top center;">
<div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-6 col-sm-8 ml-auto mr-auto">
        <form class="form" method="POST" action="{{ route('supplier.login') }}">
            @csrf
          
            <div class="card card-login card-hidden">
            <div class="card-header card-header-primary text-center">
              <h4 class="card-title">Login</h4>
              
            </div>
            <div class="card-body ">
                
              <span class="bmd-form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">email</i>
                    </span>
                  </div>
                 
                  <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email..." name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                  <span class="invalid-feedback text-center" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                    @enderror
                </div>
              </span>
              <span class="bmd-form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password...">
                  @error('password')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
                </div>
              </span>
            </div>
            <div class="card-footer justify-content-center mt-3">
              <button type="submit" class="btn btn-primary ">Lets Go</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endsection
