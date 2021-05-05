
@extends('layouts.public')

@section('style')
<style>
.isDisabled {
    color: currentColor;
    cursor: not-allowed;
    opacity: 0.5;
    text-decoration: none;

  } 

  </style>  
@endsection
@section('main-content')

 <!--================ Breadcrumb ================-->
 <div class="mad-breadcrumb">
    <div class="container">
      <h1 class="mad-page-title mad-title-with-line">Shop By {{$category->category_name}}</h1>
      <nav class="mad-breadcrumb-path"><span><a href={{route('landingPage')}}>Home</a></span>/<span>Shop By {{$category->category_name}} </span>
      </nav>
    </div>
  </div>
  <!--================ End of Breadcrumb ================-->
  <div class="mad-content">
        <div class="container">
          <div class="row mad-row-size-3">
            <main id="main" class="col-xl-12 col-lg-11">
            
                <div class="mad-products item-col-3">

            @foreach ($products as $product)
               <div class="mad-col">
                <!-- Product -->
                <div class="mad-product">
                  <figure class="mad-product-image">
                    @if(isset($product->sale_price))
                    <div class="mad-label">Sale</div>
                    @endif
                    <a href="#"><img src="/images/products/{{$product->product_img}}" alt="{{$product->product_name}}"></a>
                    <div class="overlay">
                      <a href={{route('cart.add', $product->id)}} class="btn">Add to Cart</a>
                    </div>
                  </figure>
                  <!-- product-info -->
                  <div class="mad-product-description">
                    <h5 class="mad-product-title"><a href={{route('singleProductPage',$product->id)}}>{{$product->product_name}}</a></h5>
                    @if(isset($product->sale_price))
                    <span class="mad-product-price"><span>${{$product->product_price}}</span> ${{$product->sale_price}}</span>
                    @else
                    <span class="mad-product-price"> ${{$product->product_price}} </span>
                    @endif
                   
                  </div>
                  <!--/ product-info -->
                </div>
                <!-- End of Product -->
              </div>    
            @endforeach

                </div>
                {{$products->links("pagination::default")}} 
                
            </main>            
           





            
          </div>
        </div>
      </div>
      
@endsection