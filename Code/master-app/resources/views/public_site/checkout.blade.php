@extends('layouts.public')

@section('style')
<style>
  .StripeElement {
      box-sizing: border-box;
      height: 40px;
      padding: 10px 12px;
      border: 1px solid transparent;
      border-radius: 4px;
      background-color: white;
      box-shadow: 0 1px 3px 0 #e6ebf1;
      -webkit-transition: box-shadow 150ms ease;
      transition: box-shadow 150ms ease;
  }
  .StripeElement--focus {
      box-shadow: 0 1px 3px 0 #cfd7df;
  }
  .StripeElement--invalid {
      border-color: #fa755a;
  }
  .StripeElement--webkit-autofill {
      background-color: #fefde5 !important;
  }
</style>    
@endsection



@section('main-content')
<!--================ Breadcrumb ================-->
<div class="mad-breadcrumb">
    <div class="container">
      <h1 class="mad-page-title mad-title-with-line">Checkout</h1>
      <nav class="mad-breadcrumb-path"><span><a href={{route('landingPage')}}>Home</a></span>/<span>Checkout</span>
      </nav>
    </div>
  </div>
  <!--================ End of Breadcrumb ================-->
  
 
  <div class="mad-content">
    <div class="container">
      <div class="content-element-2">
        <div class="content-element-3">
          <h3 class="mad-page-title">Your Order</h3>
          <!--================ Horizontal Table ================-->
          <div class="mad-table-wrap mad-checkout-form">
            <table>
              <thead>
                <tr class="bg">
                  <th>Product</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($cart->items as $product)                
                <tr>
                  <td>
                    <!-- Product -->
                    <div class="mad-product">
                      <div class="mad-product-description">
                        <h5 class="mad-product-title"><a href="#">{{$product['name']}}</a></h5>
                      </div>
                      <!--/ product-info -->
                    </div>
                    <!-- End of Product -->
                  </td>
                  <td data-cell-title="Total">${{$product['price']}} x {{$product['qty']}}</td>
                </tr>
              @endforeach 
              </tbody>
              <tfoot>
                <tr>
                  <td>
                    <h5 class="checkout-title"><strong>Order Total</strong></h5>
                  </td>
                  <td><strong>${{$amount}}</strong></td>
                </tr>
              </tfoot>
            </table>
          </div>
          <!--================ End of Horizontal Table ================-->
        </div>
       
      </div>
      <div class="content-element-2">
        <div class="row type-3">
          <div class="col-lg-6">
            <h3 class="mad-page-title">Proceed Payment</h3>
            
             <!-- Used to display form errors. -->
            <div id="card-errors" role="alert"></div>
            <form action={{route('cart.charge')}} method="post" id="payment-form">
              @csrf
                  <input type="hidden" name="amount" value="{{$amount}}">
                  <div class="form-group">
                   
                    <div class="form-col-12">
                      <label for="name" >Name</label>
                      <input name="name" type="text" id="name"  required>
                    </div>
                    <div class="form-col-12">
                      <label for="name" >Address</label>
                      <input name="address" type="text" id="address"  required>
                    </div>
                    <div class="form-col-12">
                      <label for="name" >Card Holder Name</label>
                      <input name="card-name" type="text" id="card-name"  required>
                    </div>
                  </div>
                  <div style="margin-top:5%" class="">
                      <label for="card-element">
                          Credit or debit card
                      </label>
                      <div id="card-element">
                          <!-- A Stripe Element will be inserted here. -->
                      </div>
  
                     
                  </div>
  
                  <button style="margin-top:3%" class="btn btn-primary mt-3">Submit Payment</button>
                  <p id="loading" style="display:none;"> Payment is in process . please wait...</p>
                </form>
          </div>
         
        </div>
      </div>
      
    </div>
  </div>

  
@endsection

@section('script')
<script src="https://js.stripe.com/v3/"></script>  
<script>
  window.onload = function() {

          var stripe = Stripe('pk_test_51HjvoGBJu7B0LpcXZFGHXNKaXz0RoQ1dXcy6hOkxnm6JBzrC4FIKtab3msTF660dvlV5aQObtu1rDYHDL9JYEjxv001p78uRJo');
          var elements = stripe.elements();
          var style = {
              base: {
                  color: '#32325d',
                  fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                  fontSmoothing: 'antialiased',
                  fontSize: '16px',
                  '::placeholder': {
                      color: '#aab7c4'
                  }
              },
              invalid: {
                  color: '#fa755a',
                  iconColor: '#fa755a'
              }
          };
          var card = elements.create('card', {
              style: style
          });
          card.mount('#card-element');
          // Handle real-time validation errors from the card Element.
          card.addEventListener('change', function(event) {
              var displayError = document.getElementById('card-errors');
              if (event.error) {
                  displayError.textContent = event.error.message;
              } else {
                  displayError.textContent = '';
              }
          });
          // Handle form submission.
          var form = document.getElementById('payment-form');
          form.addEventListener('submit', function(event) {
              event.preventDefault();
              stripe.createToken(card).then(function(result) {
                  if (result.error) {
                      // Inform the user if there was an error.
                      var errorElement = document.getElementById('card-errors');
                      errorElement.textContent = result.error.message;
                  } else {
                      // Send the token to your server.
                      stripeTokenHandler(result.token);
                  }
              });
          });
          function stripeTokenHandler(token) {
              // Insert the token ID into the form so it gets submitted to the server
              var form = document.getElementById('payment-form');
              var hiddenInput = document.createElement('input');
              hiddenInput.setAttribute('type', 'hidden');
              hiddenInput.setAttribute('name', 'stripeToken');
              hiddenInput.setAttribute('value', token.id);
              form.appendChild(hiddenInput);
              
              
              var loading = document.getElementById('loading')
                loading.style.display = "block";
                
                // Submit the form
                form.submit();
                }
      }
</script>





@endsection