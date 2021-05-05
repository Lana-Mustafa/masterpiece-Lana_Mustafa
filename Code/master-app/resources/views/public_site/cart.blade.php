@extends('layouts.public')

@section('main-content')

<!--================ Breadcrumb ================-->
<div class="mad-breadcrumb">
    <div class="container">
      <h1 class="mad-page-title mad-title-with-line">Cart</h1>
      <nav class="mad-breadcrumb-path"><span><a href={{route('landingPage')}}>Home</a></span>/<span>Cart</span>
      </nav>
    </div>
  </div>
<!--================ End of Breadcrumb ================-->
 <div class="mad-content">
        <div class="container">
          <div class="content-element-2">
            @if($cart)
            <!--================ Horizontal Table ================-->
            <div class="mad-table-wrap shop-cart-form">
              @if ($errors->any())
              <div role="alert" class="mad-alert-box mad-alert-box--error">
                <div class="mad-alert-box-inner">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  <button type="button" class="mad-alert-box-close">Close</button>
                </div>
              </div>
              @endif
              <table class="mad-table--responsive-md">
                <thead>
                  <tr class="bg">
                    <th>Product</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th>Change Qty</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($cart->items as $product)
                  <tr>
                    <td class="shopping-cart-full" data-cell-title="Product">
                      <div class="mad-products mad-product-small">
                        <div class="mad-col">
                          <!-- Product -->
                          <div class="mad-product">
                            
                           <form method="post" action={{route('cartproduct.remove', $product['id'])}}>
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn-link"><i class="licon-cross-circle"></i></button>
                           </form>
                            <a href="#" class="mad-product-image">
                              <img src="/images/products/{{ $product['img'] }}" alt="{{ $product['name'] }}">
                            </a>
                            <!-- product-info -->
                            <div class="mad-product-description">
                              <h5 class="mad-product-title"><a href="#">{{ $product['name'] }}</a></h5>
                            </div>
                            <!--/ product-info -->
                          </div>
                          <!-- End of Product -->
                        </div>
                      </div>
                    </td>
                    <td data-cell-title="Price">{{ $product['price'] }}</td>
                    <td data-cell-title="Quantity">{{ $product['qty'] }}</td>
                    <td data-cell-title="Total">{{ $product['price'] }}</td>
                    <td data-cell-title="Action">
                      <form action="{{ route('cartproduct.update',$product['id'])}}" method="post">
                        @csrf
                        @method('put')  
                        <div class="quantity">
                          <input style="text-align:center" name="qty" value="{{$product['qty']}}" type="text"  readonly="">
                          <button type="button" class="qty-minus"><i class="licon-minus"></i></button>
                          <button style="margin-left:85%" type="button" class="qty-plus"><i class="licon-plus"></i></button>
                          <div style="display: flex ; justify-content: center">
                          <button type="submit" class="btn btn-small btn-style-4">change</button>
                          </div>
                        </div>
                      </form>

                    </td>

                  </tr>
                    
                  @endforeach
                 
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="5">
                      <div  class="mad-shop-footer">
                        <p><strong>Cart Total : ${{$cart->totalPrice}}</strong></p>
                        <div class="align-right">
                          <a href={{route('cart.checkout',$cart->totalPrice)}} class="btn">Proceed to Checkout</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tfoot>
              </table>
            </div>
            @else 
            <p class="mad-page-title" ></p>
            <div role="alert" class="mad-alert-box mad-alert-box--info">
              <div class="mad-alert-box-inner">There are no item to show 
                <button type="button" class="mad-alert-box-close">Close</button>
              </div>
            </div>
            
            @endif
            <!--================ End of Horizontal Table ================-->
          </div>
          <div class="content-element-2">
            <div class="row type-3">
              <div class="col-lg-12">
                <h3 class="mad-page-title">You May Be Interested In...</h3>
                <!--================ Products ================-->
                <div class="mad-products item-col-4">
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
                           <span class="mad-product-price">${{$product->product_price}} </span>
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
        </div>
      </div>

@endsection