<!DOCTYPE html>
<html lang="en">

<head>
  <!--================ Basic page needs ================-->
  <title>Kunstwerk | Index</title>
  <meta charset="UTF-8">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
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
            <form class="mad-search-form">
              <button type="button" data-arctic-modal="#search-modal" class="mad-icon mad-seacrh-click"><i
                  class="icon licon-magnifier"></i></button>

              <input type="text" placeholder="Search">
            </form>
          </div>
        </div>
        <!--================ End of Column ================-->
        <!--================ Column ================-->
        <div class="mad-header-col align-center">
          <a href="index.html" class="mad-ln--independent"><img src="{{ asset('public-assets/images/logo3.png')}}" alt=""></a>
        </div>
        <!--================ End of Column ================-->
        <!--================ Column ================-->
        <div class="mad-header-col">
          <div class="mad-header-items">
            <div class="mad-dropdown">
              <button type="button" class="mad-icon mad-dropdown-title"><i class="icon licon-cart-empty"></i></button>
              <div class="shopping-cart mad-dropdown-element mad-dropdown-element--x-left">
                  <div class="mad-products mad-product-small">
                    <div class="mad-col">
                      <!-- Product -->
                      <div class="mad-product">
                        <button class="mad-close-item"><i class="licon-cross-circle"></i></button>
                        <a href="#" class="mad-product-image">
                          <img src="{{ asset('public-assets/images/70x70_product1.jpg') }}" alt="">
                        </a>
                        <!-- product-info -->
                        <div class="mad-product-description">
                          <h5 class="mad-product-title"><a href="#">Cosy Toddler Pillow</a></h5>
                          <span class="mad-product-price">1x$57.00</span>
                        </div>
                        <!--/ product-info -->
                      </div>
                      <!-- End of Product -->
                    </div>
                    <div class="mad-col">
                      <!-- Product -->
                      <div class="mad-product">
                        <button class="mad-close-item"><i class="licon-cross-circle"></i></button>
                        <a href="#" class="mad-product-image">
                          <img src="{{ asset('public-assets/images/70x70_product2.jpg') }}" alt="">
                        </a>
                        <!-- product-info -->
                        <div class="mad-product-description">
                          <h5 class="mad-product-title"><a href="#">Steel Coffee Table</a></h5>
                          <span class="mad-product-price">1x$499.00</span>
                        </div>
                        <!--/ product-info -->
                      </div>
                      <!-- End of Product -->
                    </div>
                  </div>
                  <div class="sc-footer">
                    <div class="subtotal">Subtotal: <span class="total-price">$556.00</span></div>
                    <div class="btns">
                      <a href="#" class="btn btn-style-4 btn-small">View Cart</a>
                      <a href="#" class="btn btn-small">Checkout</a>
                    </div>
                  </div>
                </div>
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
          <li class="menu-item menu-item-has-children current-menu-item"><a href="index.html"
              class="mad-ln--independent">Home</a>
            <!--================ Sub Menu ================-->
            <ul class="sub-menu">
              <li class="menu-item current-menu-item"><a href="index.html" class="mad-ln--independent">Handmade
                  Marketplace</a>
              </li>
              <li class="menu-item"><a href="home_2.html" class="mad-ln--independent">Handmade Jewelry</a>
              </li>
              <li class="menu-item"><a href="home_3.html" class="mad-ln--independent">Handmade Furniture</a>
              </li>
            </ul>
            <!--================ End of Sub Menu ================-->
          </li>
          <li class="menu-item menu-item-has-children"><a href="#" class="mad-ln--independent">Jewelry & Accessories</a></li>
          <li class="menu-item menu-item-has-children"><a href="#" class="mad-ln--independent">Clothing & Shoes</a></li>
          <li class="menu-item menu-item-has-children"><a href="#" class="mad-ln--independent">Home & Living</a></li>
          <li class="menu-item menu-item-has-children"><a href="#" class="mad-ln--independent">Toys & Entertainment</a></li>
          <li class="menu-item menu-item-has-children"><a href="pages_about_v1.html" class="mad-ln--independent">Pages</a>
            <!--================ Sub Menu ================-->
            <ul class="sub-menu">
              <li class="menu-item"><a href="pages_about_v1.html" class="mad-ln--independent">About Us v1</a>
              </li>
              <li class="menu-item"><a href="pages_about_v2.html" class="mad-ln--independent">About Us v2</a>
              </li>
              <li class="menu-item"><a href="pages_team.html" class="mad-ln--independent">Our Team</a>
              </li>
              <li class="menu-item"><a href="pages_sell.html" class="mad-ln--independent">Sell on Kunstwerk</a>
              </li>
              <li class="menu-item"><a href="pages_vendors.html" class="mad-ln--independent">Vendors</a>
              </li>
              <li class="menu-item"><a href="pages_store_v1.html" class="mad-ln--independent">Vendor Store v1</a>
              </li>
              <li class="menu-item"><a href="pages_store_v2.html" class="mad-ln--independent">Vendor Store v2</a>
              </li>
              <li class="menu-item"><a href="pages_contact_v1.html" class="mad-ln--independent">Contact v1</a>
              </li>
              <li class="menu-item"><a href="pages_contact_v2.html" class="mad-ln--independent">Contact v2</a>
              </li>
              <li class="menu-item"><a href="pages_coming_soon.html" class="mad-ln--independent">Coming Soon Page</a>
              </li>
              <li class="menu-item"><a href="pages_404.html" class="mad-ln--independent">404 Page</a>
              </li>
            </ul>
            <!--================ End of Sub Menu ================-->
          </li>
          <li class="menu-item menu-item-has-children mega-menu"><a href="elements_alert_boxes_buttons.html"
              class="mad-ln--independent">Features</a>
            <!--================ Sub Menu ================-->
            <ul class="sub-menu">
              <li class="menu-item menu-item-has-children"><a href="#" class="mad-ln--independent">Elements
                  1</a>
                <!--================ Sub Menu ================-->
                <ul class="sub-menu">
                  <li class="menu-item"><a href="elements_accordions_toggles.html" class="mad-ln--independent">Accordions
                      &amp; Toggles</a></li>
                  <li class="menu-item"><a href="elements_alert_boxes_buttons.html" class="mad-ln--independent">Alert
                      Boxes
                      &amp; Buttons</a></li>
                  <li class="menu-item"><a href="elements_banners.html" class="mad-ln--independent">Banners</a>
                  </li>
                  <li class="menu-item"><a href="elements_call_to_actions.html" class="mad-ln--independent">Call
                      to
                      Actions
                      and Dividers</a></li>
                </ul>
                <!--================ End of Sub Menu ================-->
              </li>
              <li class="menu-item menu-item-has-children current-menu-item"><a href="#" class="mad-ln--independent">Elements
                  2</a>
                <!--================ Sub Menu ================-->
                <ul class="sub-menu">
                  <li class="menu-item"><a href="elements_counters_countdowns.html" class="mad-ln--independent">Counters
                      and Countdown</a></li>
                  <li class="menu-item"><a href="elements_icon_boxes.html" class="mad-ln--independent">Icon
                      Boxes</a>
                  </li>
                  <li class="menu-item"><a href="elements_image_boxes.html" class="mad-ln--independent">Image
                      Boxes</a>
                  </li>
                  <li class="menu-item"><a href="elements_partners.html" class="mad-ln--independent">Partners</a></li>
                </ul>
                <!--================ End of Sub Menu ================-->
              </li>
              <li class="menu-item menu-item-has-children current-menu-item"><a href="#" class="mad-ln--independent">Elements
                  3</a>
                <!--================ Sub Menu ================-->
                <ul class="sub-menu">
                  <li class="menu-item"><a href="elements_pricing_table.html" class="mad-ln--independent">Pricing
                      Tables</a></li>
                  <li class="menu-item"><a href="elements_progress_tables_charts.html" class="mad-ln--independent">Progress
                      Bars and Tables</a></li>
                  <li class="menu-item"><a href="elements_tabs_tours.html" class="mad-ln--independent">Tabs and
                      Tour
                      Sections</a></li>
                  <li class="menu-item"><a href="elements_testimonials.html" class="mad-ln--independent">Testimonials</a></li>
                </ul>
                <!--================ End of Sub Menu ================-->
              </li>
              <li class="menu-item menu-item-has-children"><a href="#" class="mad-ln--independent">Typography</a>
                <!--================ Sub Menu ================-->
                <ul class="sub-menu">
                  <li class="menu-item"><a href="elements_dropcaps_blockquotes.html" class="mad-ln--independent">Dropcaps
                      &amp; Blockquotes</a></li>
                  <li class="menu-item"><a href="elements_headings_and_paragraphs.html" class="mad-ln--independent">Headings
                      &amp; Paragraphs</a></li>
                  <li class="menu-item"><a href="elements_highlights_tooltips_listings.html"
                      class="mad-ln--independent">Highlights, Tooltips and Listings</a></li>
                  <li class="menu-item"><a href="rtl/index.html" class="mad-ln--independent">RTL Version</a>
                  </li>
                </ul>
                <!--================ End of Sub Menu ================-->
              </li>
              <li class="menu-item menu-item-has-children"><a href="#" class="mad-ln--independent">Header
                  Layouts</a>
                <!--================ Sub Menu ================-->
                <ul class="sub-menu">
                  <li class="menu-item"><a href="index.html" class="mad-ln--independent">Header v1</a></li>
                  <li class="menu-item"><a href="home_2.html" class="mad-ln--independent">Header v2</a></li>
                  <li class="menu-item"><a href="home_3.html" class="mad-ln--independent">Header v3</a></li>
                  <li class="menu-item"><a href="pages_about_v1.html" class="mad-ln--independent">Header v4</a></li>
                </ul>
                <!--================ End of Sub Menu ================-->
              </li>
              <li class="menu-item menu-item-has-children"><a href="#" class="mad-ln--independent">Footer
                  Layouts</a>
                <!--================ Sub Menu ================-->
                <ul class="sub-menu">
                  <li class="menu-item"><a href="index.html" class="mad-ln--independent">Footer v1</a></li>
                  <li class="menu-item"><a href="home_2.html" class="mad-ln--independent">Footer v2</a></li>
                  <li class="menu-item"><a href="home_3.html" class="mad-ln--independent">Footer v3</a></li>
                </ul>
                <!--================ End of Sub Menu ================-->
              </li>
            </ul>
            <!--================ End of Sub Menu ================-->
          </li>
          <li class="menu-item menu-item-has-children"><a href="blog_classic_v1.html"
              class="mad-ln--independent">Blog</a>
            <!--================ Sub Menu ================-->
            <ul class="sub-menu">
              <li class="menu-item menu-item-has-children"><a href="blog_classic_v1.html" class="mad-ln--independent">Classic</a>
                <!--================ Sub Menu ================-->
                <ul class="sub-menu">
                  <li class="menu-item"><a href="blog_classic_v1.html" class="mad-ln--independent">Variant 1</a>
                  </li>
                  <li class="menu-item"><a href="blog_classic_v2.html" class="mad-ln--independent">Variant 2</a>
                  </li>
                </ul>
                <!--================ End of Sub Menu ================-->
              </li>
              <li class="menu-item menu-item-has-children"><a href="blog_classic_v1.html"
                  class="mad-ln--independent">Grid</a>
                <!--================ Sub Menu ================-->
                <ul class="sub-menu">
                  <li class="menu-item"><a href="blog_grid_v1.html" class="mad-ln--independent">Variant 1</a>
                  </li>
                  <li class="menu-item"><a href="blog_grid_v2.html" class="mad-ln--independent">Variant 2</a>
                  </li>
                </ul>
                <!--================ End of Sub Menu ================-->
              </li>
              <li class="menu-item menu-item-has-children"><a href="blog_classic_v1.html"
                  class="mad-ln--independent">Masonry</a>
                <!--================ Sub Menu ================-->
                <ul class="sub-menu">
                  <li class="menu-item"><a href="blog_masonry_v1.html" class="mad-ln--independent">Variant 1</a>
                  </li>
                  <li class="menu-item"><a href="blog_masonry_v2.html" class="mad-ln--independent">Variant 2</a>
                  </li>
                </ul>
                <!--================ End of Sub Menu ================-->
              </li>
              <li class="menu-item menu-item-has-children"><a href="blog_classic_v1.html"
                  class="mad-ln--independent">Single Blog Post</a>
                <!--================ Sub Menu ================-->
                <ul class="sub-menu">
                  <li class="menu-item"><a href="blog_single_v1.html" class="mad-ln--independent">Variant 1</a>
                  </li>
                  <li class="menu-item"><a href="blog_single_v2.html" class="mad-ln--independent">Variant 2</a>
                  </li>
                </ul>
                <!--================ End of Sub Menu ================-->
              </li>
            </ul>
            <!--================ End of Sub Menu ================-->
          </li>
        </ul>
      </nav>
      <!--================ End of Navigation ================-->
    </header>
    <!--================ End of Header ================-->
   

    @yield('main-content')

   
    <!--================ Footer ================-->
    <footer id="mad-footer" class="mad-footer">
      <img class="svg" src="{{ asset('public-assets/images/background_pattern.svg') }}" alt="">
      <!--================ Footer row ================-->
      <div class="mad-footer-main">
        <div class="container">
          <div class="row">
            <div class="col-lg-2 col-sm-6">
              <!--================ Widget ================-->
              <section>
                <h6 class="mad-widget-title">About</h6>
                <nav class="vr-list mad-links-white">
                  <ul>
                    <li><a href="#">What is Kunstwerk</a></li>
                    <li><a href="#">Sell on Kunstwerk</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </nav>
              </section>
              <!--================ End of Widget ================-->
            </div>
            <div class="col-lg-2 col-sm-6">
              <!--================ Widget ================-->
              <section>
                <h6 class="mad-widget-title">Categories</h6>
                <nav class="vr-list mad-links-white">
                  <ul>
                    <li><a href="#">Jewellery & Accessories</a></li>
                    <li><a href="#">Clothing & Shoes</a></li>
                    <li><a href="#">Home & Living</a></li>
                    <li><a href="#">Toys & Entertainment</a></li>
                  </ul>
                </nav>
              </section>
              <!--================ End of Widget ================-->
            </div>
            <div class="col-lg-2 col-sm-6">
              <!--================ Widget ================-->
              <section>
                <h6 class="mad-widget-title">Support</h6>
                <nav class="vr-list mad-links-white">
                  <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Delivery & Returns</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Help and FAQs</a></li>
                    <li><a href="#">Login</a></li>
                  </ul>
                </nav>
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
            <div class="col-lg-4 col-sm-6">
              <!--================ Widget ================-->
              <section>
                <h6 class="mad-widget-title">Join Our Newsletter</h6>
                <p class="small">Get the latest updates on new products and upcoming sales.</p>
                <form class="mad-newsletter-form">
                  <input type="email" name="email" placeholder="Enter email address">
                  <button type="submit"><i class="icon licon-envelope"></i></button>
                </form>
              </section>
              <!--================ End of Widget ================-->
            </div>
          </div>
        </div>
      </div>
      <!--================ End of Footer row ================-->
      <!--================ Footer row ================-->
      <div class="mad-footer-bottom">
        <div class="container">
          <div class="row justify-content-between align-items-center">
            <div class="col">
              <p class="small">Copyright Kunstwerk © 2019. All Rights Reserved.</p>
            </div>
            <div class="col align-right"><a href="#"><img src="{{ asset('public-assets/images/payment.png') }}" alt=""></a></div>
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
  <script src="{{ asset('public-assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('public-assets/vendors/arcticmodal/jquery.arcticmodal-0.3.min.js') }}"></script>
  <script src="{{ asset('public-assets/vendors/fancybox/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('public-assets/vendors/monkeysan.validator.min.js') }}"></script>
  <script src="{{ asset('public-assets/vendors/handlebars-v4.0.5.min.js') }}"></script>
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


</body>

</html>