@extends('layouts.public')

@section('style')

<style>
     .card {
         box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
     }
     
     .card {
         position: relative;
         display: flex;
         flex-direction: column;
         min-width: 0;
         word-wrap: break-word;
         background-color: #fff;
         background-clip: border-box;
         border: 0 solid rgba(0,0,0,.125);
         border-radius: .25rem;
         
     }
     
     .card-body {
         flex: 1 1 auto;
         min-height: 1px;
         padding: 1rem;
     }
    .profile_actions{
      height: 25vh;
      display: flex;
      flex-direction:column;
      justify-content:space-between;
    } 
    
</style>
@endsection
@section('main-content')

<div class="mad-breadcrumb">
    <div class="container">
      <h1 class="mad-page-title mad-title-with-line">My Account</h1>
      <nav class="mad-breadcrumb-path"><span><a href={{route('landingPage')}}>Home</a></span>/<span>My Account</span>
      </nav>
    </div>
  </div>

  <div class="mad-content">
    <div class="container">
      <div class="row mad-row-size-3">
        <main class="col-xl-12 col-lg-11">
          <div class="content-element-2">
           
            <div class="row">
              <div class="col-md-5 ">
                <div class="card"  >
                  <div class="card-body " >
                    <div class="d-flex flex-column align-items-center text-center">
                      <img src="/images/users/{{Auth::user()->img}}" alt="Admin" class="rounded-circle" width="150">
                      <div class="mt-3">
                        <h4>{{Auth::user()->name}}</h4>
                        <p class="text-secondary mb-1">{{Auth::user()->email}}</p>
                        <p class="text-muted font-size-sm">{{Auth::user()->mobile}}</p>
                        <div class="profile_actions">
                        <a href="{{route('user.profile')}}" class="btn  with-line"> <span>Edit Profile <i class="licon-minus"></i></span> </a>
                        
                        <a href={{route('user.changepassword')}} class="btn  with-line"><span>Change Password<i class="licon-minus"></i></span></a>
                        
                        <a class="btn  with-line"
                        href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" ><span> Sign Out  <i class="licon-minus"></i></span> </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        </div>
                    </div>
                    </div>
                  </div>
                </div> 
              </div>
              <div class="col-md-7">
               
                <div class="content-element-2" >
                  <h6 class="mad-page-title ">Order History</h6>
                <div class="mad-table-wrap mad-history-table">
              <table class="mad-table--responsive-md">
                <thead>
                  <tr>
                    <th class="order-number">Order #</th>
                    <th class="order-date">Date</th>
                    <th class="order-date">Address</th>
                    <th>Total</th>
                    <th class="order-view"></th>
                  </tr>
                </thead>
                <tbody>
                 @foreach ($orders as $order)
                 <tr>
                  <td data-cell-title="Order #">{{$order->id}}</td>
                  <td data-cell-title="Date">{{$order->created_at}}</td>
                  <td data-cell-title="Date">{{$order->address}}</td>
                  <td data-cell-title="Total">${{$order->cart->totalPrice}}</td>
                  <td><a href={{route('order.show', $order->id)}} class="link-color-3">VIEW</a></td>
                </tr>  
                 @endforeach
                  
                  
                </tbody>
              </table>
            </div>
              </div>
            </div>
          </div>
         
          </div>
         
        </main>
        
      </div>
    </div>
  </div>

    
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
@endsection
