@extends('layouts.public')

@section('main-content')
 <!--================ Breadcrumb ================-->
 <div class="mad-breadcrumb no-title">
    <div class="container">
        @if (url()->previous() == 'http://localhost:8000/')
        <nav class="mad-breadcrumb-path"><span><a href={{route('landingPage')}}>Home</a></span>/<span>{{$product->product_name}}</span>
        </nav>
        @elseif(url()->previous() == 'http://localhost:8000/shop')     
        <nav class="mad-breadcrumb-path"><span><a href={{route('landingPage')}}>Home</a></span>/<span><a href={{route('shop')}}>Shop</a></span>/<span> {{$product->product_name}}</span>
        </nav>
        @elseif(url()->previous() == "http://localhost:8000/shopByCategory/$product->category_id")
        <nav class="mad-breadcrumb-path"><span><a href={{route('landingPage')}}>Home</a></span>/<span><a href={{route('shopByCategory',$product->category_id)}}> Shop By {{$product->category->category_name}}</a></span>/<span>{{$product->product_name}}</span>
        </nav>
        @elseif(url()->previous() == "http://localhost:8000/shopBySubcategory/$product->subcategory_id")
        <nav class="mad-breadcrumb-path"><span><a href={{route('landingPage')}}>Home</a></span>/<span><a href={{route('shopBySubcategory',$product->subcategory_id)}}>{{$product->subcategory->subcategory_name}}</a></span>/<span>{{$product->product_name}}</span>
        </nav>
        @endif
         
    </div>
  </div>
  <!--================ End of Breadcrumb ================-->
 
<div class="mad-content">
    <div class="container">
        <div class="content-element-2">
            <!-- product-single -->
            <div class="mad-product mad-product-single">
              <div class="row mad-row-size-3">
                <div class="col-lg-6">
                  <div class="image-preview-container">
                    <!-- - - - - - - - - - - - - - Image Preview Container - - - - - - - - - - - - - - - - -->
                    <div class="image-preview">
                      <a href="/images/products/{{$product->product_img}}" data-zoom-image="/images/products/{{$product->product_img}}" data-fancybox="group">
                        <img id="zoom-image" src="/images/products/{{$product->product_img}}" alt="{{$product->product_name}}">
                      </a>
                    </div>
                    <!--/ .image-preview-->
                    <!-- - - - - - - - - - - - - - Thumbnails - - - - - - - - - - - - - - - - -->
                    <div class="owl-carousel mad-product-thumbs mad-grid mad-grid--cols-3 no-dots mad-owl-nav" id="thumbnails">
                      
                        <div class="mad-grid-item">
                            <a class="active" href="#" data-image="/images/products/{{$product->product_img}}" data-zoom-image="/images/products/{{$product->product_img}}">
                          <img src="/images/products/{{$product->product_img}}" alt="{{$product->product_name}}">
                            </a>
                        </div>
                        @if(isset($gallery))
                        @foreach ($gallery as $img)
                        <div class="mad-grid-item">
                          <a  href="#" data-image="/images/products/{{$img->name}}" data-zoom-image="/images/products/{{$img->name}}">
                        <img src="/images/products/{{$img->name}}" alt="{{$img->name}}">
                          </a>
                        </div>                            
                        @endforeach
                        
                        @endif                            
                    </div>
                    <!-- - - - - - - - - - - - - - End of Thumbnails - - - - - - - - - - - - - - - - -->
                    <!-- - - - - - - - - - - - - - End of Image Preview Container - - - - - - - - - - - - - - - - -->
                  </div>
                  <!--/ .image-preview-container -->
                </div>
                <div class="col-lg-6">
                    <!-- - - - - - - - - - - - - - Product Description - - - - - - - - - - - - - - - - -->
                    <div class="product-description">
                      <h1 class="mad-page-title">{{ $product->product_name }}</h1>
                     
                      @if(isset($product->sale_price))
                      <div class="mad-product-price"><span>${{$product->product_price}}</span> ${{$product->sale_price}}</div>
                      @else
                      <div class="mad-product-price">${{$product->product_price}} </div>
                      @endif
                      <p> {{ $product->product_description}} </p>
                      <form class="add-to-cart-form">
                        
                        <a href={{route('cart.add', $product->id)}} class="btn btn-big">Add to Cart</a>
                        <!--/ .product-actions -->
                      </form>
                      <ul class="product-meta">
                        <li><span>Category:: </span> <a href= {{route('shopByCategory',$product->category->id)}} class="link-color-3">{{$product->category->category_name}}</a></li>
                        <li><span>Subcategory:: </span> <a href={{route('shopBySubcategory',$product->subcategory_id)}} class="link-color-3">{{$product->subcategory->subcategory_name}}</a></li>
                      </ul>
                      
                    </div>
                    <!-- - - - - - - - - - - - - - End of Product Description - - - - - - - - - - - - - - - - -->
                </div>
              </div>
                <!--/ .row -->
            </div>
            <!--/ product-single -->                
<!--================ Tabs ================-->
            <div class="mad-tabs">
  <!--================ Tabs Navigation ================-->
        <div role="tablist" aria-label="Tabs v1" class="mad-tabs-nav">
                <span class="mad-active"><a id="tab-1-link" href="#tab-1" role="tab" aria-selected="false" aria-controls="tab-1"
        class="mad-ln--independent mad-tab-link">Meet the artisat</a></span>
                <span><a id="tab-6-link" href="#tab-6" role="tab" aria-selected="true" aria-controls="tab-6"
        class="mad-ln--independent mad-tab-link">More Products</a></span>
                </div>
  <!--================ End of Tabs Navigation ================-->
  <!--================ Tabs Container ================-->
      <div class="mad-tabs-container">
    <!--================ Tab ================-->
        <div id="tab-1" role="tabpanel" aria-labelledby="tab-1-link" class="mad-tab">
            <h5 class="mad-page-title">{{$product->supplier->name}}</h5>
            <p>{{$product->supplier->description}}</p>
            <div style="display: flex ; justify-content: center">
            <a href="#" class="read-more ">Read Full Story</a>
            </div>
        </div>
    <!--================ End of Tab ================-->
    
    <!--================ Tab ================-->
      <div id="tab-6" role="tabpanel" aria-labelledby="tab-6-link" class="mad-tab">
          <h5 class="mad-page-title">More Products From This Artisat</h5>
      <!--================ Products ================-->
      <div class="mad-products item-col-4">
        @foreach ($supplierproducts as $supplierproduct)
       
      <div class="mad-col">
         <!-- Product -->
         <div class="mad-product">
           <figure class="mad-product-image">
             @if(isset($supplierproduct->sale_price))
             <div class="mad-label">Sale</div>
             @endif
             <a href="#"><img src="/images/products/{{$supplierproduct->product_img}}" alt="{{$supplierproduct->product_name}}"></a>
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
      <!--================ End of Products ================-->
    </div>
    <!--================ End of Tab ================-->
    
  </div>
  <!--================ End of Tabs Container ================-->
</div>
<!--================ End of Tabs ================-->    
</div>

  
<div class="content-element-2">
  <h3 class="mad-page-title">Related Products</h3>
  <!--================ Products ================-->
  <div class="mad-products item-col-4">
    @foreach ($relatedproducts as $relatedproduct)
    <div class="mad-col">
         <!-- Product -->
         <div class="mad-product">
           <figure class="mad-product-image">
             @if(isset($relatedproduct->sale_price))
             <div class="mad-label">Sale</div>
             @endif
             <a href="#"><img src="/images/products/{{$relatedproduct->product_img}}" alt="{{$relatedproduct->product_name}}"></a>
             <div class="overlay">
               <a href={{route('cart.add', $relatedproduct->id)}} class="btn">Add to Cart</a>
             </div>
           </figure>
           <!-- product-info -->
           <div class="mad-product-description">
             <h5 class="mad-product-title"><a href={{route('singleProductPage',$relatedproduct->id)}}>{{$relatedproduct->product_name}}</a></h5>
             @if(isset($relatedproduct->sale_price))
             <span class="mad-product-price"><span>${{$relatedproduct->product_price}}</span> ${{$relatedproduct->sale_price}}</span>
             @else
             <span class="mad-product-price">${{$relatedproduct->product_price}} </span>
             @endif
             
           </div>
           <!--/ product-info -->
         </div>
         <!-- End of Product -->
      </div>  
      @endforeach   
  </div>
  <!--================ End of Products ================-->
</div>
    
    
    
    
    
  </div>
</div>



@endsection