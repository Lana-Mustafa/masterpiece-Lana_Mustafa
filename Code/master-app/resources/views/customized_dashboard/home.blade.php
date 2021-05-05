@extends('layouts.customized_dashboard')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-profile">
                <div class="card-avatar">
                  
                    <img alt="supplier_img" class="img" src="/images/suppliers/{{Auth::user()->img}}" />
                  
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">{{Auth::user()->name}}</h6>
                  <h4 class="card-title">{{Auth::user()->email}}</h4>
                  <h4 class="card-title">{{Auth::user()->mobile}}</h4>
                  <p class="card-description">
                    {{Auth::user()->description}}.......
                  </p>
                  {{-- <a href="#pablo" class="btn btn-rose btn-primary">Edit Pofile</a> --}} 
                </div>
              </div>
              
        </div>
    </div>
</div>
@endsection
