@extends('layouts.public')

@section('main-content')
 <!--================ Breadcrumb ================-->
 <div class="mad-breadcrumb">
    <div class="container">
      <h1 class="mad-page-title mad-title-with-line">Sellers</h1>
      <nav class="mad-breadcrumb-path"><span><a href={{route('landingPage')}}>Home</a></span>/<span>Sellers</span>
      </nav>
    </div>
  </div>
  <!--================ End of Breadcrumb ================-->
  <div class="mad-content no-pt">
    <div class="container">
      <!--================ Vendors ================-->
      <div class="mad-vendors item-col-4">
        @foreach ($suppliers as $supplier)
        <div class="mad-col">
          <!--================ Vendor Item ================-->
         
          <div class="mad-vendor-item">
            <figure class="mad-vendor-img">
              <img src="/images/suppliers/{{$supplier->img}}" alt="">
              <div class="mad-vendor-content">
                <div class="mad-vendor-label"></div>
                <div class="mad-vendor-title">
                  <h5 style="color:#333" class="mad-title">{{$supplier->name}}</h5>
                  <div class="rating-holder">
                  </div>
                </div>
              </div>
            </figure>
            <div style="display: flex ; justify-content:center" class="mad-vendor-desc">
              <a href={{route('seller', $supplier->id)}} class="btn btn-small btn-style-3">View Artisan Works</a>
            </div>
          </div>                
         
         
          <!--================ End of Vendor Item ================-->
        </div>
        @endforeach
        
      </div>
      <!--================ End of Vendors ================-->
      {{$suppliers->links("pagination::default")}} 
    
    </div>
  </div>
  

@endsection