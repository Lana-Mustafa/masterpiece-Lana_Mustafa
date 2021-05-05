@extends('layouts.public')

@section('main-content')

<div class="mad-content">
    <div class="container">
      <div class="row mad-row-size-3">
        <main class="col-xl-9 col-lg-8">
          <div class="content-element-2">
            <h3 class="mad-page-title">Order Details</h3>
            <div class="mad-table-wrap mad-history-table">
              <table class="mad-table--responsive-md">
                <thead>
                  <tr>
                    <th>Img</th>
                    <th>Name</th>
                    <th>Qty</th>
                    <th>Price</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($order->cart->items as $item)
                    <tr>
                        <td><img src="/images/products/{{$item['img']}}" class="mad-product-image" alt="{{$item['name']}}"/></td>
                        <td>{{$item['name']}}</td>
                        <td>{{$item['qty']}}</td>
                        <td>${{$item['price']}}</td>
                    </tr>
                    @endforeach
                  
                </tbody>
              </table>
            </div>
          </div>
        </main>
    </div>
</div>
</div>


@endsection