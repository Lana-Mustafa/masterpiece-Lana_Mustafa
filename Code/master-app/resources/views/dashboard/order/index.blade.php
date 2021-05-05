@extends('layouts.dashboard')

@section('main-content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">request_page</i>
            </div>
            <h4 class="card-title">All Orders</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                   
                    <th>Order#</th>
                    <th>Customer</th>
                    <th>Total Price</th>
                    <th>Address</th>
                    <th>Date</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                  <tr>
                    
                    <td>{{$order->id}}</td>
                    <td>{{$order->name}}</td>
                    <td>${{$order->cart->totalPrice}}</td> 
                    <td>{{$order->address}}</td> 
                    <td>{{$order->created_at}}</td> 
                    
                  </tr>
                 
                  
                 
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{$orders->links()}}
@endsection

