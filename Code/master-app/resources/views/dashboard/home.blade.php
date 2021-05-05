@extends('layouts.dashboard')

@section('main-content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-profile">
                <div class="card-avatar">
                  
                    <img class="img" src="/images/admin.png" alt="admin_img" />
                  
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">{{Auth::user()->name}}</h6>
                  <h4 class="card-title">{{Auth::user()->email}}</h4>
                  <h4 class="card-title">{{Auth::user()->mobile}}</h4>
                  <a href={{route('admin.profile')}} class="btn btn-primary btn-round">Edit Profile</a>
                  
                </div>
              </div>
              
        </div>
    </div>

    
</div>
@endsection
