<!DOCTYPE html>
<html lang="en">

<head>
  <!--================ Basic page needs ================-->
  <title>Kraftangle | Index</title>
  <meta charset="UTF-8">
  <meta name="author" content="Kraftangle" />
  <!--the viewport to make your website look good on all devices-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content=" an e-commerce website for marketing a wide and varied collection of handmade products " />
  <meta name="keyword" content="e-commerce ,handmade,craft" />
  <!--================ Mobile specific metas ================-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--================ Favicon ================-->
  <link rel="shortcut icon" href="images/favicon.ico">
  <!--================ Google web fonts ================-->
  <link
    href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700%7CRoboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
    rel="stylesheet">
  <!--================ Vendor CSS ================-->
  <link rel="stylesheet" href="{{ asset('public-assets/css/fontawesome-all.min.css')}}">
  <link rel="stylesheet" href="{{ asset('public-assets/css/linearicons.css')}}">
  <link rel="stylesheet" href="{{ asset('public-assets/vendors/owl-carousel/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('public-assets/vendors/monkeysan-tooltip/monkeysan-jquery-tooltip.css')}}">
  <link rel="stylesheet" href="{{ asset('public-assets/vendors/fancybox/jquery.fancybox.min.css')}}">
  <link rel="stylesheet" href="{{ asset('public-assets/vendors/arcticmodal/jquery.arcticmodal-0.3.css')}}">
  <link rel="stylesheet" href="{{ asset('public-assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('public-assets/css/animate.min.css')}}">
  <!--================ Theme CSS ================-->
  <link rel="stylesheet" href="{{ asset('public-assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('public-assets/css/responsive.css')}}">
  <!--================ Vendor JS ================-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
  @yield('style')
</head>

<body class="mad-body--scheme-brown">
  <div class="mad-preloader"></div>
  <div id="mad-page-wrapper" class="mad-page-wrapper">
    <!--================ Header ================-->
    <header id="mad-header" class="mad-header header-main">
      <div class="mad-top-header">
        <div class="mad-header-col">
          <!--================ Currency List ================-->
          @guest
          <div class="mad-dropdown mad-dropdown--title-icon mad-dropdown--languages">
            <button type="button" class="mad-dropdown-title">Join as Buyer
              <i class="fa fa-angle-down mad-dropdown-icon--state-default"></i>
              <i class="fa fa-angle-up mad-dropdown-icon--state-opened"></i>
            </button>
            <ul class="mad-dropdown-element">
              @if (Route::has('login'))
              <li><a href={{route('login')}} class="mad-ln--independent">Login</a></li> 
              @endif
              @if (Route::has('register'))
              <li><a href={{route('register')}}  class="mad-ln--independent">Register</a></li>
              @endif
            </ul>
          </div>
          @endguest
          <!--================ Languages List ================-->
          @guest('supplier')
          <div class="mad-dropdown mad-dropdown--title-icon mad-dropdown--languages">
            <button type="button" class="mad-dropdown-title">Join as Seller
              <i class="fa fa-angle-down mad-dropdown-icon--state-default"></i>
              <i class="fa fa-angle-up mad-dropdown-icon--state-opened"></i>
            </button>
            <ul class="mad-dropdown-element">
              @if (Route::has('supplier.login'))
              <li><a href={{route('supplier.login')}}  class="mad-ln--independent">Login</a></li>
              @endif
              @if (Route::has('supplier.register'))
              <li><a href={{route('supplier.register')}}  class="mad-ln--independent">Register</a></li>
              @endif
            </ul>
          </div>
          @endguest
        </div>
        <div class="mad-header-col align-center">
          <span>Free shipping on orders over $99</span>
        </div>
        <div class="mad-header-col">
          <nav class="hr-list">
            <ul>
             {{--  <li><a href="#">Wishlist</a></li> --}}
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              {{-- <li><a href="#">Help</a></li> --}}
            </ul>
          </nav>
        </div>
      </div>
      <!--================ Section ================-->
      <div class="mad-header-section">
        <!--================ Column ================-->
        <div class="mad-header-col">
          <div class="mad-search-area">
            <form method="post" action={{route('shop')}} class="mad-search-form">
              @csrf
              <buttont type="submit" class="mad-icon "><i
                  class="icon licon-magnifier"></i></buttont>

              <input name ="q" type="text" placeholder="Search">
            </form>
          </div>
        </div>
        <!--================ End of Column ================-->
        <!--================ Column ================-->
        <div class="mad-header-col align-center">
          <a href={{route('landingPage')}} class="mad-ln--independent"><img src="/images/Logo.png" alt="logo"></a>
        </div>
        <!--================ End of Column ================-->
        <!--================ Column ================-->
        <div class="mad-header-col">
          <div class="mad-header-items">
            <div class="mad-dropdown">
              <a href={{route('cart.show')}} type="button" class="mad-icon mad-dropdown-title"><i class="icon licon-cart-empty">({{ session()->has('cart') ? session()->get('cart')->totalQty : '0'}})</i></a>
              
            </div>
            <div>
              @auth
              <a href={{route('home')}}><button type="button" class="mad-icon"><i class="icon licon-user"></i></button></a>
              @endauth
            </div>
          </div>
        </div>
        <!--================ End of Column ================-->
      </div>
      <!--================ End of Section ================-->
      
      <!--================ Navigation ================-->
<nav class="mad-navigation-container mad-header-section--sticky-xl">
  <ul class="mad-navigation mad-navigation--vertical-sm">
    @foreach ($categories as $category)
    <li class="menu-item menu-item-has-children"><a href={{route('shopByCategory',$category->id)}} class="mad-ln--independent">{{$category->category_name}}</a>
      <!--================ Sub Menu ================-->
      <ul class="sub-menu">
        @foreach ($category->subcategories as $subcategory)
        <li class="menu-item"><a href={{route('shopBySubcategory',$subcategory->id)}} class="mad-ln--independent">{{$subcategory->subcategory_name}}</a>
        </li>
        @endforeach
      </ul>
      <!--================ End of Sub Menu ================-->
    </li>               
    @endforeach
          
   
  </ul>
</nav>
<!--================ End of Navigation ================--> 
    </header>
    <!--================ End of Header ================-->
   

    @yield('main-content')

   
    <!--================ Footer ================-->
    <footer id="mad-footer" class="mad-footer">
      <img class="svg" src="{{ asset('public-assets/images/background_pattern.svg') }}" alt="footer background">
      <!--================ Footer row ================-->
      <div class="mad-footer-main">
        <div class="container">
          <div class="row">
            <div class="col-lg-1 col-sm-6"></div>             
            <div class="col-lg-4 col-sm-6">
              <!--================ Widget ================-->
              <section>
                <h6 class="mad-widget-title">
                   <a href={{route('landingPage')}} class="mad-ln--independent mad-logo">
                      <img src="/images/transparentLogo.png" alt="Logo">
                    </a>
                </h6>
                <div class="mad-our-info" style="text-align: justify; font-size:1rem">
                <p >An Online Handmade Store to provide the Opportunity 
                  for Local Artists to spread their Own Unique Message 
                  via our Easy-to-Use Online Platform.
                  Although our sellers come from a variety of backgrounds,
                  cultures, and customs, they all share one common thread: 
                  they are All Highly Skilled Artisans following their 
                  Passions.</p>
                </div>
              </section>
              <!--================ End of Widget ================-->
            </div>
            <div class="col-lg-2 col-sm-6">
              <!--================ Widget ================-->
              <section>
                <h6 class="mad-widget-title">Categories</h6>
                <nav class="vr-list mad-links-white">
                  <ul>
                    @foreach ($categories as $category)                    
                    <li><a href={{route('shopByCategory',$category->id)}}>{{$category->category_name}}</a></li>
                    @endforeach
                  </ul>
                </nav>
              </section>
              <!--================ End of Widget ================-->
            </div>
            <div class="col-lg-2 col-sm-6">
              <!--================ Widget ================-->
              <section>
                <h6 class="mad-widget-title">Contact Us</h6>
                <div class="mad-our-info">
                  <!--================ info Box ================-->
                  <article class="mad-info-block">
                    <i class="mad-info-icon licon-map-marker"></i>
                    <p>Amman , Joradn </p>
                  </article>
                  <!--================ End of info Box ================-->
                  <!--================ info Box ================-->
                  <article class="mad-info-block">
                    <i class="mad-info-icon licon-telephone"></i>
                    <p>+962-77-7777777</p>
                  </article>
                  <!--================ End of info Box ================-->
                  <!--================ info Box ================-->
                  <article class="mad-info-block">
                    <i class="mad-info-icon licon-at-sign"></i>
                    <a href="#" class="link-color-3">mail@kraftangle.com</a>
                  </article>
                  <!--================ End of info Box ================-->
                </div>
               
              </section>
              <!--================ End of Widget ================-->
            </div>
            <div class="col-lg-2 col-sm-6">
              <!--================ Widget ================-->
              <section>
                <h6 class="mad-widget-title">Follow Us</h6>
                <nav class="vr-list icon-list mad-links-white">
                  <ul>
                    <li><i class="fab fa-facebook-f"></i><a href="#">Facebook</a></li>
                    <li><i class="fab fa-twitter"></i><a href="#">Twitter</a></li>
                    <li><i class="fab fa-instagram"></i><a href="#">Instagram</a></li>
                    <li><i class="fab fa-pinterest-p"></i><a href="#">Pinterest</a></li>
                  </ul>
                </nav>
              </section>
              <!--================ End of Widget ================-->
            </div>
            <div class="col-lg-1 col-sm-6"></div>            
          </div>
        </div>
      </div>
      <!--================ End of Footer row ================-->
      <!--================ Footer row ================-->
      <div class="mad-footer-bottom">
        <div class="container">
          <div class="row justify-content-center align-items-center">
            
              <p class="small">Copyright Kraftangle © 2019. All Rights Reserved.</p>
            
            
          </div>
        </div>
      </div>
      <!--================ End of Footer row ================-->
    </footer>
    <!--================ End of Footer ================-->
  </div>
  <script src="{{ asset('public-assets/vendors/modernizr.js') }}"></script>
  <script src="{{ asset('public-assets/vendors/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('public-assets/vendors/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('public-assets/vendors/jquery.easing.1.3.min.js') }}"></script>
  <script src="{{ asset('public-assets/vendors/monkeysan.accordion.js') }}"></script>
  <script src="{{ asset('public-assets/vendors/monkeysan.tabs.min.js') }}"></script>
  <script src="{{ asset('public-assets/vendors/monkeysan-tooltip/monkeysan-jquery-tooltip.js') }}"></script>
  <script src="{{ asset('public-assets/vendors/monkeysan.jquery.nav.1.0.min.js') }}"></script>
  <script src="{{ asset('public-assets/vendors/mad.customselect.js')}}"></script>
  <script src="{{ asset('public-assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('public-assets/vendors/arcticmodal/jquery.arcticmodal-0.3.min.js') }}"></script>
  <script src="{{ asset('public-assets/vendors/fancybox/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('public-assets/vendors/monkeysan.validator.min.js') }}"></script>
  <script src="{{ asset('public-assets/vendors/tweetie/tweetie.min.js') }}"></script>
  <script src="{{ asset('public-assets/vendors/elevatezoom.min.js') }}"></script>
  <script src="{{ asset('public-assets/vendors/monkeysan.tabs.min.js') }}"></script>
  <script src="{{ asset('public-assets/vendors/handlebars-v4.0.5.min.js') }}"></script>
  <script src="{{ asset('public-assets/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('public-assets/vendors/retina.min.js') }}"></script>
  <script src="{{ asset('public-assets/js/modules/mad.alert-box.min.js') }}"></script>
  <script src="{{ asset('public-assets/js/modules/mad.newsletter-form.min.js') }}"></script>
  <script src="{{ asset('public-assets/js/modules/mad.sticky-header-section.min.js')}}"></script>
  <script src="{{ asset('public-assets/js/mad.app.js') }}"></script>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
           
              @if (session()->has('success'))
              <script>
                 toastr.success("{!! session()->get('success') !!}");
              </script>
              @endif

  @yield('script')
</body>

</html>