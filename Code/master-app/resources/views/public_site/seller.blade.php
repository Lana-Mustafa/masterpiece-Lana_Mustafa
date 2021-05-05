@extends('layouts.public')


@section('main-content')

 <!--================ Breadcrumb ================-->
 <div class="mad-breadcrumb no-title">
    <div class="container mad-fw-md">
        <h1 class="mad-page-title mad-title-with-line">Seller</h1>
        @if (url()->previous() == 'http://localhost:8000/')
        <nav class="mad-breadcrumb-path"><span><a href={{route('landingPage')}}>Home</a></span>/<span>{{$supplier->name}}</span>
        </nav>
        @elseif(url()->previous() == 'http://localhost:8000/sellers')     
        <nav class="mad-breadcrumb-path"><span><a href={{route('landingPage')}}>Home</a></span>/<span><a href={{route('sellers')}}>Sellers</a></span>/<span> {{$supplier->name}}</span>
        </nav>
        @endif
    </div>
  </div>
  <!--================ End of Breadcrumb ================-->

  <div class="mad-content">
    <div class="container mad-fw-md">
      <div class="row mad-row-size-3">
        <main id="main" class="col-xl-12">
          <div class="mad-vendors">
            <!--================ Vendor Item ================-->
            <div class="mad-vendor-item single-vendor">
              <figure class="mad-vendor-img">
                <img style="height:50vh" src="{{asset('images/suppliers/supplier_bg.jpg')}}" alt="">
                <div class="mad-vendor-content">
                  <div class="vendor-title-wrap">
                    <div  class="vendor-author">
                      <img style="width:120px ; height:120px " src="/images/suppliers/{{$supplier->img}}" alt="">
                    </div>
                    <div style="display:flex; align-items:center"class="mad-vendor-title">
                      <h5  class="mad-title">{{$supplier->name}}</h5>
                    </div>
                  </div>
                </div>
              </figure>
              <div class="mad-vendor-desc">
                <!--================ Tabs ================-->
                <div class="mad-tabs">
                  <!--================ Tabs Navigation ================-->
                  <div role="tablist" aria-label="Tabs v1" class="mad-tabs-nav">
                    <span class="mad-active"><a id="tab-1-link" href="#tab-1" role="tab" aria-selected="false" aria-controls="tab-1" class="mad-ln--independent mad-tab-link">Products</a>
                    </span>
                    <span><a id="tab-2-link" href="#tab-2" role="tab" aria-selected="true" aria-controls="tab-2" class="mad-ln--independent mad-tab-link">Reviews</a>
                    </span>
                  </div>
                  <!--================ End of Tabs Navigation ================-->
                  <!--================ Tabs Container ================-->
                  <div class="mad-tabs-container">
                    <!--================ Tab ================-->
                    <div id="tab-1" tabindex="0" role="tabpanel" aria-labelledby="tab-1-link" class="mad-tab">
                      <div class="mad-products item-col-3">
                        @foreach ($supplierproducts as $supplierproduct)
       
                        <div class="mad-col">
                           <!-- Product -->
                           <div class="mad-product">
                             <figure class="mad-product-image">
                               @if(isset($supplierproduct->sale_price))
                               <div class="mad-label">Sale</div>
                               @endif
                               <a href="#"><img src="/images/products/{{$supplierproduct->product_img}}" alt=""></a>
                               <div class="overlay">
                                 <a href={{route('cart.add', $supplierproduct->id)}} class="btn">Add to Cart</a>
                               </div>
                             </figure>
                             <!-- product-info -->
                             <div class="mad-product-description">
                               <h5 class="mad-product-title"><a href={{route('singleProductPage',$supplierproduct->id)}}>{{$supplierproduct->product_name}}</a></h5>
                               @if(isset($supplierproduct->sale_price))
                               <span class="mad-product-price"><span>${{$supplierproduct->product_price}}</span> ${{$supplierproduct->sale_price}}</span>
                               @else
                               <span class="mad-product-price">${{$supplierproduct->product_price}} </span>
                               @endif
                              
                             </div>
                             <!--/ product-info -->
                           </div>
                           <!-- End of Product -->
                        </div>  
                          
                      @endforeach                       
                          
                      </div>
                      {{$supplierproducts->links("pagination::default")}} 
                    </div>
                    <!--================ End of Tab ================-->
                    <!--================ Tab ================-->
                    <div id="tab-2" tabindex="0" role="tabpanel" aria-labelledby="tab-2-link" class="mad-tab">
                      <p>{{$supplier->description}}</p>
                    </div>
                    <!--================ End of Tab ================-->
                  </div>
                  <!--================ End of Tabs Container ================-->
                </div>
              </div>
            </div>
            <!--================ End of Vendor Item ================-->
          </div>
        </main>
        
      </div>
    </div>
  </div>


@endsection