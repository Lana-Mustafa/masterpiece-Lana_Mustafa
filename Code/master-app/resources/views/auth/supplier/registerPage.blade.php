@extends('layouts.auth_dashboard')
@section('title')
Register Page   
@endsection
@section('content')
<div class="page-header register-page header-filter" filter-color="black" style="background-image: url('{{ asset('dashboard-assets/img/register.jpg')}}'">
   
    <div class="container">
      <div class="row">
        <div class="col-md-10 ml-auto mr-auto">
          <div class="card card-signup">
            <h3 class="card-title text-center">Join Us Now!</h3>
            <div class="card-body">
              <div class="row">
                <div class="col-md-5 ml-auto">
                  <div class="info info-horizontal">
                    <div class="icon icon-rose">
                      <i class="material-icons">timeline</i>
                    </div>
                    <div class="description">
                      <h4 class="info-title">Marketing Online </h4>
                      <p class="description">
                        Marketing Your Products in an Easy and Effective Way !!
                      </p>
                    </div>
                  </div>
                  <div class="info info-horizontal">
                    <div class="icon icon-primary">
                      <i class="material-icons">local_shipping </i>
                    </div>
                    <div class="description">
                      <h4 class="info-title">Delivery Service</h4>
                      <p class="description">
                        Your Products Will Be Delivered to any Buyer Without Thinking How that !! 
                      </p>
                    </div>
                  </div>
                  <div class="info info-horizontal">
                    <div class="icon icon-info">
                      <i class="material-icons">group</i>
                    </div>
                    <div class="description">
                      <h4 class="info-title">Building Your Audience</h4>
                      <p class="description">
                        Connecting Yourself With Who Really Interested In Your Products !!
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-5 mr-auto">
                 
                  <form class="form" method="POST" action="{{ route('supplier.register') }}"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group has-default">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">face</i>
                          </span>
                        </div>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name..." name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                      </div>
                    </div> 
                    <div class="form-group has-default">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">mail</i>
                          </span>
                        </div>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email..." name="email" value="{{ old('email') }}" required autocomplete="email" >
                           @error('email')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                           @enderror
                      </div>
                    </div>
                    <div class="form-group has-default">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">phone_iphone</i>
                          </span>
                        </div>
                        <input type="text" class="form-control @error('mobile') is-invalid @enderror" placeholder="Mobile..." name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" >
                           @error('mobile')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                           @enderror
                      </div>
                    </div>
                    <div class="form-group has-default">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">description</i>
                          </span>
                        </div>
                        
                        <textarea class="form-control @error('description') is-invalid @enderror" rows="3" placeholder="Description..." name="description"  required autocomplete="description" >
                          {{ old('description') }}
                        </textarea>
                          @error('description')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                           @enderror
                      </div>
                    </div>
                    <div class="form-group has-default">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">lock_outline</i>
                          </span>
                        </div>
                        <input type="password" placeholder="Password..." class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                           @error('password')
                             <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                             </span>
                            @enderror
                      
                      </div>
                    </div>
                    <div class="form-group has-default">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">lock_outline</i>
                          </span>
                        </div>
                        <input type="password" placeholder="Confirm Password..." class="form-control" name="password_confirmation" required autocomplete="new-password">
                      </div>
                    </div>
                    {{-- <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="" checked="">
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                        I agree to the
                        <a href="#something">terms and conditions</a>.
                      </label>
                    </div> --}}
                    <div class="text-center">
                      <button  type="submit" href="#pablo" class="btn btn-primary btn-round mt-4">Get Started</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection