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
      <nav class="mad-breadcrumb-path"><span><a href="index.html">Home</a></span>/<span>My Account</span>
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
                    <th>Status</th>
                    <th>Total</th>
                    <th class="order-view"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-cell-title="Order #">12345</td>
                    <td data-cell-title="Date">December 17, 2019</td>
                    <td data-cell-title="Status">Pending</td>
                    <td data-cell-title="Total">$5.99</td>
                    <td><a href="#" class="link-color-3">VIEW</a></td>
                  </tr>
                  <tr>
                    <td data-cell-title="Order #">12346</td>
                    <td data-cell-title="Date">December 17, 2019</td>
                    <td data-cell-title="Status">Pending</td>
                    <td data-cell-title="Total">$31.30</td>
                    <td><a href="#" class="link-color-3">VIEW</a></td>
                  </tr>
                  <tr>
                    <td data-cell-title="Order #">12347</td>
                    <td data-cell-title="Date">December 17, 2019</td>
                    <td data-cell-title="Status">Pending</td>
                    <td data-cell-title="Total">$96.27</td>
                    <td><a href="#" class="link-color-3">VIEW</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
              </div>
            </div>
          </div>
          <!-- <div class="content-element-2">
            <h3 class="mad-page-title">Order History</h3>
            <div class="mad-table-wrap mad-history-table">
              <table class="mad-table--responsive-md">
                <thead>
                  <tr>
                    <th class="order-number">Order #</th>
                    <th class="order-date">Date</th>
                    <th>Status</th>
                    <th>Total</th>
                    <th class="order-view"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-cell-title="Order #">12345</td>
                    <td data-cell-title="Date">December 17, 2019</td>
                    <td data-cell-title="Status">Pending</td>
                    <td data-cell-title="Total">$5.99</td>
                    <td><a href="#" class="link-color-3">VIEW</a></td>
                  </tr>
                  <tr>
                    <td data-cell-title="Order #">12346</td>
                    <td data-cell-title="Date">December 17, 2019</td>
                    <td data-cell-title="Status">Pending</td>
                    <td data-cell-title="Total">$31.30</td>
                    <td><a href="#" class="link-color-3">VIEW</a></td>
                  </tr>
                  <tr>
                    <td data-cell-title="Order #">12347</td>
                    <td data-cell-title="Date">December 17, 2019</td>
                    <td data-cell-title="Status">Pending</td>
                    <td data-cell-title="Total">$96.27</td>
                    <td><a href="#" class="link-color-3">VIEW</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div> -->
          </div>
         
        </main>
        <!-- <aside id="mad-sidebar" class="mad-sidebar mad-sbr col-xl-3 col-lg-4">
          <div class="mad-widget">
            <div class="mad-loc-input">
              <input type="text" placeholder="Search">
              <button><i class="icon licon-magnifier"></i></button>
            </div>
          </div>
          <div class="mad-widget">
            <h6 class="mad-widget-title">Categories</h6>
            <ul class="mad-category-list mad-slide-menu">
              <li><a href="javascript: void(0)" class="mad-slide"><span>Clothing & Shoes</span><span>346</span></a>
                <ul class="mad-slide-content">
                  <li><a href="#"><span>Stuffed Toys</span><span>54</span></a></li>
                  <li><a href="#"><span>Shapes & Colors</span><span>48</span></a></li>
                  <li><a href="#"><span>Numbers & Letters</span><span>29</span></a></li>
                  <li><a href="#"><span>Memory & Matching</span><span>80</span></a></li>
                  <li><a href="#"><span>Christmas</span><span>31</span></a></li>
                  <li><a href="#"><span>Busy Books & Pads</span><span>55</span></a></li>
                </ul>
              </li>
              <li><a href="javascript: void(0)" class="mad-slide"><span>Jewellery & Accessories</span><span>655</span></a>
                <ul class="mad-slide-content">
                  <li><a href="#"><span>Stuffed Toys</span><span>54</span></a></li>
                  <li><a href="#"><span>Shapes & Colors</span><span>48</span></a></li>
                  <li><a href="#"><span>Numbers & Letters</span><span>29</span></a></li>
                  <li><a href="#"><span>Memory & Matching</span><span>80</span></a></li>
                  <li><a href="#"><span>Christmas</span><span>31</span></a></li>
                  <li><a href="#"><span>Busy Books & Pads</span><span>55</span></a></li>
                </ul>
              </li>
              <li><a href="javascript: void(0)" class="mad-slide"><span>Home & Living</span><span>1291</span></a>
                <ul class="mad-slide-content">
                  <li><a href="#"><span>Stuffed Toys</span><span>54</span></a></li>
                  <li><a href="#"><span>Shapes & Colors</span><span>48</span></a></li>
                  <li><a href="#"><span>Numbers & Letters</span><span>29</span></a></li>
                  <li><a href="#"><span>Memory & Matching</span><span>80</span></a></li>
                  <li><a href="#"><span>Christmas</span><span>31</span></a></li>
                  <li><a href="#"><span>Busy Books & Pads</span><span>55</span></a></li>
                </ul>
              </li>
              <li><a href="javascript: void(0)" class="mad-slide"><span>Toys & Entertainment</span><span>297</span></a>
                <ul class="mad-slide-content">
                  <li><a href="#"><span>Stuffed Toys</span><span>54</span></a></li>
                  <li><a href="#"><span>Shapes & Colors</span><span>48</span></a></li>
                  <li><a href="#"><span>Numbers & Letters</span><span>29</span></a></li>
                  <li><a href="#"><span>Memory & Matching</span><span>80</span></a></li>
                  <li><a href="#"><span>Christmas</span><span>31</span></a></li>
                  <li><a href="#"><span>Busy Books & Pads</span><span>55</span></a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="mad-widget">
            <h6 class="mad-widget-title">Products</h6>
            <div class="mad-products mad-product-small">
              <div class="mad-col"> -->
                <!-- Product -->
                <!-- <div class="mad-product">
                  <a href="#" class="mad-product-image">
                    <img src="images/70x70_product3.jpg" alt="">
                  </a> -->
                  <!-- product-info -->
                  <!-- <div class="mad-product-description">
                    <h5 class="mad-product-title"><a href="#">Set of 3 Uno Rings</a></h5>
                    <span class="mad-product-price">$144.00</span>
                  </div> -->
                  <!--/ product-info -->
               <!--  </div> -->
                <!-- End of Product -->
              <!-- </div>
              <div class="mad-col"> -->
                <!-- Product -->
                <!-- <div class="mad-product">
                  <a href="#" class="mad-product-image">
                    <img src="images/70x70_product1.jpg" alt="">
                  </a> -->
                  <!-- product-info -->
                 <!--  <div class="mad-product-description">
                    <h5 class="mad-product-title"><a href="#">Cosy Toddler Pillow</a></h5>
                    <span class="mad-product-price">$57.00</span>
                  </div> -->
                  <!--/ product-info -->
                <!-- </div> -->
                <!-- End of Product -->
              <!-- </div>
              <div class="mad-col"> -->
                <!-- Product -->
               <!--  <div class="mad-product">
                  <a href="#" class="mad-product-image">
                    <img src="images/70x70_product2.jpg" alt="">
                  </a> -->
                  <!-- product-info -->
                  <!-- <div class="mad-product-description">
                    <h5 class="mad-product-title"><a href="#">Steel Coffee Table</a></h5>
                    <span class="mad-product-price"><span>$539.00</span> $499.00</span>
                  </div> -->
                  <!--/ product-info -->
               <!--  </div> -->
                <!-- End of Product -->
             <!--  </div>
            </div>
          </div>
        </aside> -->
      </div>
    </div>
  </div>

    
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
@endsection
