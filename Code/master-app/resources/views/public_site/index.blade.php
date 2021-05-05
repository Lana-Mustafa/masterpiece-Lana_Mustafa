@extends('layouts.public')
@section('main-content')
<div class="mad-content no-pd">
    <div class="container wide">
      <div class="content-element-4">
        <!--================ Icon Boxes ================-->
        <div class="mad-icon-boxes style-2 hr-type item-col-3">
          <div class="mad-col">
            <!--================ Icon Box ================-->
            <article class="mad-icon-box">
              <i class="mad-icon-box-icon"><img class="svg" src="{{ asset('public-assets/Kunstwerk_svg_icons/truck.svg') }}" alt="icon"></i>
              <div class="mad-icon-box-content">
                <h2 class="mad-icon-box-title">Fast Delivery</h2>
                <p>We deliver your order as soon as possible with Careem !
                </p>
              </div>
            </article>
            <!--================ End of Icon Box ================-->
          </div>
          <div class="mad-col">
            <!--================ Icon Box ================-->
            <article class="mad-icon-box">
              <i class="mad-icon-box-icon"><img class="svg" src="{{ asset('public-assets/Kunstwerk_svg_icons/support.svg') }}" alt=""></i>
              <div class="mad-icon-box-content">
                <h2 class="mad-icon-box-title"> SUPPORT 24/7 </h2>
                <p> Contact us 24 hours a day, 7 days a week
                </p>
              </div>
            </article>
            <!--================ End of Icon Box ================-->
          </div>
          <div class="mad-col">
            <!--================ Icon Box ================-->
            <article class="mad-icon-box">
              <i class="mad-icon-box-icon"><img class="svg" src="{{ asset('public-assets/Kunstwerk_svg_icons/box.svg') }}" alt="icon"></i>
              <div class="mad-icon-box-content">
                <h2 class="mad-icon-box-title">Free Returns</h2>
                <p>14-day return policy offered!
                </p>
              </div>
            </article>
            <!--================ End of Icon Box ================-->
          </div>
        </div>
        <!--================ End of Icon Boxes ================-->
      </div>
      <div class="mad-banner-wrap">
        <div class="col-lg-7">
          <!--================ Banner ================-->
          <div class="mad-banner">
            <img src="{{ asset('public-assets/images/banner_img1.jpg') }}" alt="banner_img">
            <div class="mad-banner-inner">
              <span class="mad-banner-cat"> Clothing </span>
              <h2 class="mad-banner-title">Stay Warm and Look Great</h2>
              <a href={{route('shopBySubcategory', 6 )}} class="btn with-line btn-big"><span>shop now<i
                    class="licon-minus"></i></span></a>
            </div>
          </div>
          <!--================ End of Banner ================-->
          <div class="mad-join-us mad-colorizer--scheme-color-6">
            <div class="mad-colorizer-bg-color"><img class="svg mad-pattern" src="{{ asset('public-assets/images/background_pattern.svg') }}" alt="background_pattern"></div>
            <div class="row align-items-center">
              <div class="col-lg-12">
                <h4 class="mad-title">Sales During Ramadan</h4>
                <p> Sale <strong> 50% OFF </strong> of many New and Unique products </p>
                <a href={{route('shop')}} class="btn with-line btn-style-4"><span style="color:#D69080">Shop Now<i class="licon-minus"></i></span></a>
              </div>
              
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <!--================ Banner ================-->
          <div class="mad-banner style-2">
            <a href="#" class="mad-banner-link"></a>
            <img src="{{ asset('public-assets/images/banner_img2.jpg') }}" alt="banner_img">
            <div class="mad-banner-inner">
              <span class="mad-banner-cat">Home Accessories</span>
              <h3 class="mad-banner-title">Unique <br>
                Gift Ideas</h3>
              <a href={{route('shopBySubcategory', 7 )}} class="read-more">shop now</a>
            </div>
          </div>
          <!--================ End of Banner ================-->
          <!--================ Banner ================-->
          <div class="mad-banner style-2 left-side">
            <a href="#" class="mad-banner-link"></a>
            <img src="{{ asset('public-assets/images/banner_img3.jpg')}}" alt="banner_img">
            <div class="mad-banner-inner">
              <span class="mad-banner-cat">Stationary Products</span>
              <h3 class="mad-banner-title">Things That <br>
                Make You Smile</h3>
              <a href={{route('shopBySubcategory', 3 )}} class="read-more">shop now</a>
            </div>
          </div>
          <!--================ End of Banner ================-->
        </div>
      </div>
    </div>
    <div class="container">
      <div class="mad-section">
        <!--================ Tabs ================-->
        <div class="mad-tabs mad-shop">
          <div class="mad-tabs-holder">
            <h3 class="mad-page-title">Special Picked for You</h3>
            <!--================ Tabs Navigation ================-->
            <div role="tablist" aria-label="Tabs v1" class="mad-tabs-nav">
              <span class="mad-active"><a id="tab-1-link" href="#tab-1" role="tab" aria-selected="true" aria-controls="tab-1"
                  class="mad-ln--independent mad-tab-link">New</a>
              </span>
              <span><a id="tab-2-link" href="#tab-2" role="tab" aria-selected="false" aria-controls="tab-2"
                  class="mad-ln--independent mad-tab-link">Sale</a>
              </span>
          
            </div>
            <!--================ End of Tabs Navigation ================-->
          </div>
          <!--================ Tabs Container ================-->
          <div class="mad-tabs-container">
            <!--================ Tab ================-->
            <div id="tab-1" tabindex="0" role="tabpanel" aria-labelledby="tab-1-link" class="mad-tab">
              <div class="mad-grid owl-carousel mad-products owl-dots mad-grid--cols-4">
                @foreach ($new_products as $new_product)
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      @if(isset($new_product->sale_price))
                      <div class="mad-label">Sale</div>
                      @endif
                      <a href="#"><img src="/images/products/{{$new_product->product_img}}" alt="{{$new_product->product_name}}"></a>
                      <div class="overlay">
                        <a href={{route('cart.add', $new_product->id)}} class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href={{route('singleProductPage',$new_product->id )}}>{{$new_product->product_name}}</a></h5>
                      @if(isset($new_product->sale_price))
                      <span class="mad-product-price">                        
                        <span>${{$new_product->product_price}}</span>
                         ${{$new_product->sale_price}}</span>
                        @else
                        <span class="mad-product-price">                        
                         ${{$new_product->product_price}}
                        </span>                      
                      
                      @endif
                     
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                
                @endforeach
               
               
              </div>
            </div>
            <!--================ End of Tab ================-->
            <!--================ Tab ================-->
            <div id="tab-2" tabindex="0" role="tabpanel" aria-labelledby="tab-2-link" class="mad-tab">
              <div class="mad-grid owl-carousel mad-products owl-dots mad-grid--cols-4">
                @foreach ($sale_products as $sale_product)
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <div class="mad-label">Sale</div>
                      <a href="#"><img src="/images/products/{{$sale_product->product_img}}" alt="{{$sale_product->product_name}}"></a>
                      <div class="overlay">
                        <a href={{route('cart.add', $sale_product->id)}} class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href={{route('singleProductPage',$sale_product->id )}}>{{$sale_product->product_name}}</a></h5>
                      <span class="mad-product-price">                        
                        <span>${{$sale_product->product_price}}</span>
                         ${{$sale_product->sale_price}}</span>
                       
                    
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                
                @endforeach                
              </div>
            </div>
            <!--================ End of Tab ================-->
            
          </div>
          <!--================ End of Tabs Container ================-->
        </div>
        <!--================ End of Tabs ================-->
      </div>
      <div class="mad-section no-pt">
        <h3 class="mad-page-title">Browse Popular Categories</h3>
        <!--================ Banners ================-->
        <div class="mad-banner-wrap">
          @foreach ($popular_categories as $i => $popular_category)
              
           @if ($loop->iteration < 3)
           <div class="banner-col-2">
            <!--================ Banner ================-->
            <a href={{route('shopByCategory',$popular_category->id)}} class="mad-banner style-3 mad-ln--independent">
              <img src="/images/categories/{{$popular_category->category_img}}" alt="$popular_category->category_name">
              <div class="mad-banner-inner">
                <h5 class="mad-banner-title">{{$popular_category->category_name}}</h5>
              </div>
            </a>
            <!--================ End of Banner ================-->
          </div>                 
           @endif
        
          
          
           @if ($loop->iteration >= 3 && $loop->iteration <= 5)
          <div class="banner-col-3">
            <!--================ Banner ================-->
            <a href={{route('shopByCategory',$popular_category->id)}} class="mad-banner style-3 mad-ln--independent">
              <img src="/images/categories/{{$popular_category->category_img}}" alt="{{$popular_category->category_name}}">
              <div class="mad-banner-inner">
                <h5 class="mad-banner-title">{{$popular_category->category_name}} </h5>
              </div>
            </a>
            <!--================ End of Banner ================-->
          </div>
           @endif
          @endforeach
          
        </div>
        <!--================ End of Banners ================-->
      </div>

      
      
      <article
        class="mad-cta with-separators color-top-2 mad-section mad-section--stretched mad-colorizer--scheme-light mad-colorizer--scheme-color-3 mad-cta-color align-center">
        <div class="mad-colorizer-bg-color"><img class="svg mad-pattern" src="{{ asset('public-assets/images/background_pattern.svg')}}" alt="background_pattern"></div>
        <div class="container">
          <h2 class="mad-cta-title title-big">Start Selling on Kraftangle</h2>
          <p>Millions of shoppers can't wait to see what you have in store.</p>
          <a href={{route('supplier.register')}} class="btn btn-style-3 btn-huge">Get Started</a>
        </div>
      </article>
      
      <div class="mad-section">
        <h3 class="mad-page-title"> Meet Our Creative Sellers</h3>
        <!--================ Vendors ================-->
        <div class="mad-vendors item-col-4">
          @foreach ($suppliers as $supplier)
          <div class="mad-col">
            <!--================ Vendor Item ================-->
           
            <div class="mad-vendor-item">
              <figure class="mad-vendor-img">
                <img src="/images/suppliers/{{$supplier->img}}" alt="supplier_img">
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
        <div style="display: flex ; justify-content:center">
        <a href={{route('sellers')}} class="btn ">Show Sellers</a>
       </div>
      </div>
    </div>
  </div>
@endsection