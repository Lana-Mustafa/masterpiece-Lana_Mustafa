<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
     Dashboard 
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-pro" />
  <!--  Social tags      -->
  <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, material dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, material design, material dashboard bootstrap 4 dashboard">
  <meta name="description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Material Dashboard PRO by Creative Tim">
  <meta itemprop="description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">
  <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Material Dashboard PRO by Creative Tim">
  <meta name="twitter:description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Material Dashboard PRO by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="http://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html" />
  <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg" />
  <meta property="og:description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design." />
  <meta property="og:site_name" content="Creative Tim" />
  @yield('style')
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ asset('dashboard-assets/css/material-dashboard.min.css?v=2.1.0') }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('dashboard-assets/demo/demo.css') }}" rel="stylesheet" />
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
</head>

<body class="">
 
 
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="{{ asset('dashboard-assets/img/sidebar-2.jpg')}}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href={{route('admin.dashboard')}} class="simple-text logo-mini">
          <i class="material-icons"> dashboard </i>
        </a>
        <a href={{route('admin.dashboard')}} class="simple-text logo-normal">
          Dashboard
        </a>
      </div>
      <div class="sidebar-wrapper">
        <div class="user nav">
          @if(Auth::user()->is_super_admin)
            <li class="nav-item ">
                <a class="nav-link"  data-toggle="collapse" href="#MangeAdmin">
                  <i class="material-icons"> group_add </i>
                  <p> Manage Admins
                    <b class="caret"></b> </p>
                  
                </a>
                <div class="collapse" id="MangeAdmin">
                    <ul class="nav">
                      <li class="nav-item ">
                        <a class="nav-link" href={{route('admins.index')}}>
                          <span class="sidebar-mini"> A </span>
                          <span class="sidebar-normal"> All Admins </span>
                        </a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link" href={{route('admins.create')}}>
                          <span class="sidebar-mini"> CA </span>
                          <span class="sidebar-normal"> Create New Admin </span>
                        </a>
                      </li>
                    </ul>
                  </div>
              </li>
              @endif
              <li class="nav-item ">
                <a class="nav-link" href={{route('suppliers.index')}}>
                  <i class="material-icons"> people_outline</i>
                  <p> Manage Suppliers </p>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href={{route('users.index')}}>
                  <i class="material-icons"> supervisor_account </i>
                  <p> Manage Users </p>
                </a>
              </li>
        </div>
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#MangeCategory">
              <i class="material-icons">category</i>
              <p> Manage Categories 
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="MangeCategory">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href={{route('categories.index')}}>
                    <span class="sidebar-mini"> C </span>
                    <span class="sidebar-normal"> All Categories </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href={{route('categories.create')}}>
                    <span class="sidebar-mini"> CC </span>
                    <span class="sidebar-normal"> Create New Category </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" data-toggle="collapse" href="#MangeSubcategory">
              <i class="material-icons">workspaces </i>
              <p> Manage Sub-Categories 
                  <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="MangeSubcategory">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href={{route('subcategories.index')}}>
                    <span class="sidebar-mini"> S </span>
                    <span class="sidebar-normal"> All Subcategories </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href={{route('subcategories.create')}}>
                    <span class="sidebar-mini"> CS </span>
                    <span class="sidebar-normal"> Create New subcategory </span>
                  </a>
                </li>
              </ul>
            </div>   
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href={{route('products.index')}}>
              <i class="material-icons">grid_view</i>
              <p> Manage Products </p>
            </a>
          </li>
          
          <li class="nav-item  ">
            <a class="nav-link" href="#">
              <i class="material-icons">request_page</i>
              <p> Manage Orders </p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="#">
              <i class="material-icons">reviews</i>
              <p> Manage Reviews </p>
            </a>
          </li>
        
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-minimize">
              <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  @if(Auth::user()->unreadNotifications->count())
                  <span class="notification">{{Auth::user()->unreadNotifications->count()}}</span>
                  @endif
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                     <a style = "font-weight:bold" href={{route('markRead')}} class="ml-3"> Mark all as read </a>
                  @foreach (Auth::user()->unreadNotifications as $notification)
                  
                    <a style="background-color: lightgray "class="dropdown-item" href={{route('products.edit',$notification->data['id'])}}> the {{$notification->data['product']}} has been {{ ( $notification->type == 'App\Notifications\ProductAdded') ? 'added' : 'updated' }} by {{ $notification->data['supplier'] }} at {{$notification->created_at}} </a>
                 
                   @endforeach 
                   @foreach (Auth::user()->readNotifications as $notification)
                  
                   <a class="dropdown-item" href={{route('products.edit',$notification->data['id'])}}> the {{$notification->data['product']}} has been {{ ( $notification->type == 'App\Notifications\ProductAdded') ? 'added' : 'updated' }} by {{ $notification->data['supplier'] }} at {{$notification->created_at}} </a>
                 
                   @endforeach 
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href= {{route('admin.profile')}}>Edit Profile</a>
                  <a class="dropdown-item" href= {{route('admin.changepassword')}}>Change Password</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('admin.logout') }}"
                       onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Log out</a>
                  <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                    @csrf
                 </form>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
     
        <div class="content">
            <div class="container-fluid">
              <!-- your content here -->
              @yield('main-content')
            </div>
            </div>
                
                 
                 
                  <footer class="footer">
                    <div class="container-fluid justify-content-center">
                      
                      <div class="copyright">
                        &copy;
                        <script>
                          document.write(new Date().getFullYear())
                        </script>, made with <i class="material-icons">favorite</i> by
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                      </div>
                    </div>
                  </footer>
                </div>
              </div>
           
              <div class="fixed-plugin">
                <div class="dropdown show-dropdown">
                  <a href="#" data-toggle="dropdown">
                    <i class="fa fa-cog fa-2x"> </i>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="header-title"> Sidebar Filters</li>
                    <li class="adjustments-line">
                      <a href="javascript:void(0)" class="switch-trigger active-color">
                        <div class="badge-colors ml-auto mr-auto">
                          <span class="badge filter badge-purple" data-color="purple"></span>
                          <span class="badge filter badge-azure" data-color="azure"></span>
                          <span class="badge filter badge-green" data-color="green"></span>
                          <span class="badge filter badge-warning" data-color="orange"></span>
                          <span class="badge filter badge-danger" data-color="danger"></span>
                          <span class="badge filter badge-rose active" data-color="rose"></span>
                        </div>
                        <div class="clearfix"></div>
                      </a>
                    </li>
                    <li class="header-title">Sidebar Background</li>
                    <li class="adjustments-line">
                      <a href="javascript:void(0)" class="switch-trigger background-color">
                        <div class="ml-auto mr-auto">
                          <span class="badge filter badge-black active" data-background-color="black"></span>
                          <span class="badge filter badge-white" data-background-color="white"></span>
                          <span class="badge filter badge-red" data-background-color="red"></span>
                        </div>
                        <div class="clearfix"></div>
                      </a>
                    </li>
                    <li class="adjustments-line">
                      <a href="javascript:void(0)" class="switch-trigger">
                        <p>Sidebar Mini</p>
                        <label class="ml-auto">
                          <div class="togglebutton switch-sidebar-mini">
                            <label>
                              <input type="checkbox">
                              <span class="toggle"></span>
                            </label>
                          </div>
                        </label>
                        <div class="clearfix"></div>
                      </a>
                    </li>
                    <li class="adjustments-line">
                      <a href="javascript:void(0)" class="switch-trigger">
                        <p>Sidebar Images</p>
                        <label class="switch-mini ml-auto">
                          <div class="togglebutton switch-sidebar-image">
                            <label>
                              <input type="checkbox" checked="">
                              <span class="toggle"></span>
                            </label>
                          </div>
                        </label>
                        <div class="clearfix"></div>
                      </a>
                    </li>
                    <li class="header-title">Images</li>
                    <li class="active">
                      <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="{{ asset('dashboard-assets/img/sidebar-1.jpg')}}" alt="">
                      </a>
                    </li>
                    <li>
                      <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="{{ asset('dashboard-assets/img/sidebar-2.jpg')}}" alt="">
                      </a>
                    </li>
                    <li>
                      <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="{{ asset('dashboard-assets/img/sidebar-3.jpg')}}" alt="">
                      </a>
                    </li>
                    <li>
                      <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="{{ asset('dashboard-assets/img/sidebar-4.jpg')}}" alt="">
                      </a>
                    </li>
                    <li class="button-container">
                      <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-rose btn-block btn-fill">Buy Now</a>
                      <a href="https://demos.creative-tim.com/material-dashboard-pro/docs/2.1/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
                        Documentation
                      </a>
                      <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-info btn-block">
                        Get Free Demo!
                      </a>
                    </li>
                    <li class="button-container github-star">
                      <a class="github-button" href="https://github.com/creativetimofficial/ct-material-dashboard-pro" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
                    </li>
                    <li class="header-title">Thank you for 95 shares!</li>
                    <li class="button-container text-center">
                      <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
                      <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
                      <br>
                      <br>
                    </li>
                  </ul>
                </div>
              </div>
              <!--   Core JS Files   -->
              <script src="{{ asset('dashboard-assets/js/core/jquery.min.js') }}"></script>
              <script src="{{ asset('dashboard-assets/js/core/popper.min.js') }}"></script>
              <script src="{{ asset('dashboard-assets/js/core/bootstrap-material-design.min.js') }}"></script>
              <script src="{{ asset('dashboard-assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
              <!-- Plugin for the momentJs  -->
              <script src="{{ asset('dashboard-assets/js/plugins/moment.min.js') }}"></script>
              <!--  Plugin for Sweet Alert -->
              <script src="{{ asset('dashboard-assets/js/plugins/sweetalert2.js') }}"></script>
              <!-- Forms Validations Plugin -->
              <script src="{{ asset('dashboard-assets/js/plugins/jquery.validate.min.js') }}"></script>
              <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
              <script src="{{ asset('dashboard-assets/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
              <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
              <script src="{{ asset('dashboard-assets/js/plugins/bootstrap-selectpicker.js')}}"></script>
              <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
              <script src="{{ asset('dashboard-assets/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
              <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
              <script src="{{ asset('dashboard-assets/js/plugins/jquery.dataTables.min.js') }}"></script>
              <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
              <script src="{{ asset('dashboard-assets/js/plugins/bootstrap-tagsinput.js') }}"></script>
              <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
              <script src="{{ asset('dashboard-assets/js/plugins/jasny-bootstrap.min.js')}}"></script>
              <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
              <script src="{{ asset('dashboard-assets/js/plugins/fullcalendar.min.js')}}"></script>
              <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
              <script src="{{ asset('dashboard-assets/js/plugins/jquery-jvectormap.js')}}"></script>
              <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
              <script src="{{ asset('dashboard-assets/js/plugins/nouislider.min.js')}}"></script>
              <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
              <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
              <!-- Library for adding dinamically elements -->
              <script src="{{ asset('dashboard-assets/js/plugins/arrive.min.js')}}"></script>
              <!--  Google Maps Plugin    -->
              <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
              <!-- Place this tag in your head or just before your close body tag. -->
              <script async defer src="https://buttons.github.io/buttons.js"></script>
              <!-- Chartist JS -->
              <script src="{{ asset('dashboard-assets/js/plugins/chartist.min.js')}}"></script>
              <!--  Notifications Plugin    -->
              <script src="{{ asset('dashboard-assets/js/plugins/bootstrap-notify.js')}}"></script>
              <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
              <script src="{{ asset('dashboard-assets/js/material-dashboard.min.js?v=2.1.0')}}" type="text/javascript"></script>
              <!-- Material Dashboard DEMO methods, don't include it in your project! -->
              <script src="{{ asset('dashboard-assets/demo/demo.js')}}"></script>
             
              <script>
                $(document).ready(function() {
                  $().ready(function() {
                    $sidebar = $('.sidebar');

                    $sidebar_img_container = $sidebar.find('.sidebar-background');

                    $full_page = $('.full-page');

                    $sidebar_responsive = $('body > .navbar-collapse');

                    window_width = $(window).width();

                    fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

                    if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                      if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                        $('.fixed-plugin .dropdown').addClass('open');
                      }

                    }

                    $('.fixed-plugin a').click(function(event) {
                      // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                      if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                          event.stopPropagation();
                        } else if (window.event) {
                          window.event.cancelBubble = true;
                        }
                      }
                    });

                    $('.fixed-plugin .active-color span').click(function() {
                      $full_page_background = $('.full-page-background');

                      $(this).siblings().removeClass('active');
                      $(this).addClass('active');

                      var new_color = $(this).data('color');

                      if ($sidebar.length != 0) {
                        $sidebar.attr('data-color', new_color);
                      }

                      if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                      }

                      if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data-color', new_color);
                      }
                    });

                    $('.fixed-plugin .background-color .badge').click(function() {
                      $(this).siblings().removeClass('active');
                      $(this).addClass('active');

                      var new_color = $(this).data('background-color');

                      if ($sidebar.length != 0) {
                        $sidebar.attr('data-background-color', new_color);
                      }
                    });

                    $('.fixed-plugin .img-holder').click(function() {
                      $full_page_background = $('.full-page-background');

                      $(this).parent('li').siblings().removeClass('active');
                      $(this).parent('li').addClass('active');


                      var new_image = $(this).find("img").attr('src');

                      if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                        $sidebar_img_container.fadeOut('fast', function() {
                          $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                          $sidebar_img_container.fadeIn('fast');
                        });
                      }

                      if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                        $full_page_background.fadeOut('fast', function() {
                          $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                          $full_page_background.fadeIn('fast');
                        });
                      }

                      if ($('.switch-sidebar-image input:checked').length == 0) {
                        var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                      }

                      if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                      }
                    });

                    $('.switch-sidebar-image input').change(function() {
                      $full_page_background = $('.full-page-background');

                      $input = $(this);

                      if ($input.is(':checked')) {
                        if ($sidebar_img_container.length != 0) {
                          $sidebar_img_container.fadeIn('fast');
                          $sidebar.attr('data-image', '#');
                        }

                        if ($full_page_background.length != 0) {
                          $full_page_background.fadeIn('fast');
                          $full_page.attr('data-image', '#');
                        }

                        background_image = true;
                      } else {
                        if ($sidebar_img_container.length != 0) {
                          $sidebar.removeAttr('data-image');
                          $sidebar_img_container.fadeOut('fast');
                        }

                        if ($full_page_background.length != 0) {
                          $full_page.removeAttr('data-image', '#');
                          $full_page_background.fadeOut('fast');
                        }

                        background_image = false;
                      }
                    });

                    $('.switch-sidebar-mini input').change(function() {
                      $body = $('body');

                      $input = $(this);

                      if (md.misc.sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        md.misc.sidebar_mini_active = false;

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                      } else {

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                        setTimeout(function() {
                          $('body').addClass('sidebar-mini');

                          md.misc.sidebar_mini_active = true;
                        }, 300);
                      }

                      // we simulate the window Resize so the charts will get updated in realtime.
                      var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                      }, 180);

                      // we stop the simulation of Window Resize after the animations are completed
                      setTimeout(function() {
                        clearInterval(simulateWindowResize);
                      }, 1000);

                    });
                  });
                });
              </script>
              <!-- Sharrre libray -->
              <script src="{{ asset('dashboard-assets/demo/jquery.sharrre.js')}}"></script>
              <script>
                $(document).ready(function() {


                  $('#facebook').sharrre({
                    share: {
                      facebook: true
                    },
                    enableHover: false,
                    enableTracking: false,
                    enableCounter: false,
                    click: function(api, options) {
                      api.simulateClick();
                      api.openPopup('facebook');
                    },
                    template: '<i class="fab fa-facebook-f"></i> Facebook',
                    url: 'https://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html'
                  });

                  $('#google').sharrre({
                    share: {
                      googlePlus: true
                    },
                    enableCounter: false,
                    enableHover: false,
                    enableTracking: true,
                    click: function(api, options) {
                      api.simulateClick();
                      api.openPopup('googlePlus');
                    },
                    template: '<i class="fab fa-google-plus"></i> Google',
                    url: 'https://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html'
                  });

                  $('#twitter').sharrre({
                    share: {
                      twitter: true
                    },
                    enableHover: false,
                    enableTracking: false,
                    enableCounter: false,
                    buttons: {
                      twitter: {
                        via: 'CreativeTim'
                      }
                    },
                    click: function(api, options) {
                      api.simulateClick();
                      api.openPopup('twitter');
                    },
                    template: '<i class="fab fa-twitter"></i> Twitter',
                    url: 'https://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html'
                  });


                  var _gaq = _gaq || [];
                  _gaq.push(['_setAccount', 'UA-46172202-1']);
                  _gaq.push(['_trackPageview']);

                  (function() {
                    var ga = document.createElement('script');
                    ga.type = 'text/javascript';
                    ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(ga, s);
                  })();

                  // Facebook Pixel Code Don't Delete
                  ! function(f, b, e, v, n, t, s) {
                    if (f.fbq) return;
                    n = f.fbq = function() {
                      n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                    };
                    if (!f._fbq) f._fbq = n;
                    n.push = n;
                    n.loaded = !0;
                    n.version = '2.0';
                    n.queue = [];
                    t = b.createElement(e);
                    t.async = !0;
                    t.src = v;
                    s = b.getElementsByTagName(e)[0];
                    s.parentNode.insertBefore(t, s)
                  }(window,
                    document, 'script', '//connect.facebook.net/en_US/fbevents.js');

                  try {
                    fbq('init', '111649226022273');
                    fbq('track', "PageView");

                  } catch (err) {
                    console.log('Facebook Track Error:', err);
                  }

                });
              </script>
              <noscript>
                <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
              </noscript>
              <script>
                $(document).ready(function() {
                  // Javascript method's body can be found in assets/js/demos.js
                  md.initDashboardPageCharts();

                  md.initVectorMap();
                  

                });
              </script>
              
               <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
               @if (session()->has('success_create'))
               <script>
                 swal("Created Successfully" ,"{!! session()->get('success_create') !!}","success",{
                   button:'ok',
                 })
               </script>
              @endif
              @if (session()->has('success_update'))
               <script>
                 swal("Updated Successfully" ,"{!! session()->get('success_update') !!}","success",{
                   button:'ok',
                 })
               </script>

              @endif
              @if (session()->has('success_delete'))
              <script>
                swal("Removed Successfully" ,"{!! session()->get('success_delete') !!}","error",{
                   button:'ok',
                 })
              </script>
              @endif
              
              <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
           
              @if (session()->has('success'))
              <script>
                 toastr.success("{!! session()->get('success') !!}");
              </script>
              @endif

            </body>

</html>