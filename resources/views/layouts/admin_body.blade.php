<!--
   =========================================================
    Material Dashboard - v2.1.1
   =========================================================

    Product Page: https://www.creative-tim.com/product/material-dashboard
    Copyright 2019 Creative Tim (https://www.creative-tim.com)
    Licensed under MIT (https://github.com/creativetimofficial/material-dashboard/blob/master/LICENSE.md)

    Coded by Creative Tim

   =========================================================

    The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <link rel="apple-touch-icon" sizes="76x76" href="admin/img/apple-icon.png">
      <link rel="icon" type="image/png" href="admin/img/favicon.png">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <title>
         Admin
      </title>
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
      <!--     Fonts and icons     -->
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
      <!-- CSS Files -->
      <link href="{{ asset('admin/css/material-dashboard.css?v=2.1.1') }}" rel="stylesheet" />
      <!-- CSS Just for demo purpose, don't include it in your project -->
      <link href="{{ asset('admin/demo/demo.css') }}" rel="stylesheet" />
      <link rel="shortcut icon" href="{{ asset('visitor/images/ico/apple-touch-icon.png')}}">
      <link rel="apple-touch-icon" href="{{ asset('visitor/images/ico/apple-touch-icon.png')}}" >
      <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('visitor/images/ico/apple-touch-icon.png')}}">
      <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('visitor/images/ico/favicon-32x32.png')}}">
      <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('visitor/images/ico/favicon-16x16.png')}}">
      <link rel="manifest" href="{{ asset('visitor/images/ico/site.webmanifest')}}">
      <link rel="mask-icon" href="{{ asset('visitor/images/ico/safari-pinned-tab.svg')}}" color="#5bbad5">
      <meta name="msapplication-TileColor" content="#da532c">
      <meta name="theme-color" content="#ffffff">
   </head>
   <body class="">
      <div class="wrapper ">
         <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('admin/img/sidebar-1.jpg') }}">
            <div class="logo">
               <a href="{{ route('home_admin.index') }}" class="simple-text logo-normal">
               Admin 40y20
               </a>
            </div>
            <div class="sidebar-wrapper">
               <ul class="nav">
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('home_admin.index') }}">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                     </a>
                  </li>
                  <li class="nav-item ">
                     <a class="nav-link" href="{{ route('admin_user.index')}}">
                        <i class="material-icons">person</i>
                        <p>Users</p>
                     </a>
                  </li>
                  <li class="nav-item ">
                     <a class="nav-link" href="{{ route('admin_catalog.index') }}">
                        <i class="material-icons">content_paste</i>
                        <p>Lists</p>
                     </a>
                  </li>
                  <li class="nav-item ">
                     <a class="nav-link" href="{{ route('admin_entertainment.index')}}">
                        <i class="material-icons">library_books</i>
                        <p>Entertainment</p>
                     </a>
                  </li>
                  <li class="nav-item ">
                     <a class="nav-link" href="{{ route('admin_tag.index') }}">
                        <i class="material-icons">local_offer</i>
                        <p>Tags</p>
                     </a>
                  </li>
                  <li class="nav-item ">
                     <a class="nav-link" href="{{ route('admin_carousel.index') }}">
                        <i class="material-icons">image</i>
                        <p>Carousel</p>
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
                     <a class="navbar-brand" href="https://github.com/romel309/anim" target="_blank">Version: 0.1 </a>
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
                           <a class="nav-link" href="{{ route('home_admin.index') }}">
                              <i class="material-icons">dashboard</i>
                              <p class="d-lg-none d-md-block">
                                 Stats
                              </p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('home.show') }}">
                              <i class="material-icons">home</i>
                              <p class="d-lg-none d-md-block">
                                 Visitor
                              </p>
                           </a>
                        </li>
                        <!--
                        <li class="nav-item dropdown">
                           <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="material-icons">notifications</i>
                              <span class="notification">5</span>
                              <p class="d-lg-none d-md-block">
                                 Some Actions
                              </p>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item" href="#">Mike John responded to your email</a>
                              <a class="dropdown-item" href="#">You have 5 new tasks</a>
                              <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                              <a class="dropdown-item" href="#">Another Notification</a>
                              <a class="dropdown-item" href="#">Another One</a>
                           </div>
                            -->
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link"  id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="material-icons">person</i>
                              <p class="d-lg-none d-md-block">
                                 Account
                              </p>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                              <a class="dropdown-item" href="#">{{Auth::user()->name}}</a>
                              <!--<a class="dropdown-item" href="#">Settings</a>-->
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                              {{ __('Cerrar Sesión') }}
                              </a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 {{ csrf_field() }}
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
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                        <!-- Alertas -->
                        @if (session('status'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{ session('status') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>{!! $message !!}</strong>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        @endif()
                        @if ($errors = Session::get('errors'))
                        @foreach($errors->all() as $message)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>{!! $message !!}</strong>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        @endforeach
                        @endif()
                        <!-- Termina Alertas -->
                        @yield('admin_content')
                      </div>
                  </div>
              </div>
            </div>
            <footer class="footer">
               <div class="container-fluid">
                  <nav class="float-left">
                     <ul>
                        <li>
                           <a href="https://www.creative-tim.com">
                           Creative Tim
                           </a>
                        </li>
                        <li>
                           <a href="https://creative-tim.com/presentation">
                           About Us
                           </a>
                        </li>
                        <li>
                           <a href="http://blog.creative-tim.com">
                           Blog
                           </a>
                        </li>
                        <li>
                           <a href="https://www.creative-tim.com/license">
                           Licenses
                           </a>
                        </li>
                     </ul>
                  </nav>
                  <div class="copyright float-right">
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
      <!--   Core JS Files   -->
      <script src="{{ asset('admin/js/core/jquery.min.js') }}"></script>
      <script src="{{ asset('admin/js/core/popper.min.js') }}"></script>
      <script src="{{ asset('admin/js/core/bootstrap-material-design.min.js') }}"></script>
      <script src="{{ asset('admin/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
      <!-- Plugin for the momentJs  -->
      <script src="{{ asset('admin/js/plugins/moment.min.js') }}"></script>
      <!--  Plugin for Sweet Alert -->
      <script src="{{ asset('admin/js/plugins/sweetalert2.js') }}"></script>
      <!-- Forms Validations Plugin -->
      <script src="{{ asset('admin/js/plugins/jquery.validate.min.js') }}"></script>
      <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
      <script src="{{ asset('admin/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
      <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
      <script src="{{ asset('admin/js/plugins/bootstrap-selectpicker.js') }}"></script>
      <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
      <script src="{{ asset('admin/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
      <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
      <script src="{{ asset('admin/js/plugins/jquery.dataTables.min.js') }}"></script>
      <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
      <script src="{{ asset('admin/js/plugins/bootstrap-tagsinput.js') }}"></script>
      <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
      <script src="{{ asset('admin/js/plugins/jasny-bootstrap.min.js') }}"></script>
      <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
      <script src="{{ asset('admin/js/plugins/fullcalendar.min.js') }}"></script>
      <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
      <script src="{{ asset('admin/js/plugins/jquery-jvectormap.js') }} "></script>
      <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
      <script src="{{ asset('admin/js/plugins/nouislider.min.js') }}"></script>
      <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
      <!-- Library for adding dinamically elements -->
      <script src="{{ asset('admin/js/plugins/arrive.min.js') }}"></script>
      <!-- Chartist JS -->
      <script src="{{ asset('admin/js/plugins/chartist.min.js') }}"></script>
      <!--  Notifications Plugin    -->
      <script src="{{ asset('admin/js/plugins/bootstrap-notify.js') }}"></script>
      <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="{{ asset('admin/js/material-dashboard.js?v=2.1.1') }}" type="text/javascript"></script>
      <!-- Material Dashboard DEMO methods, don't include it in your project! -->
      <script src="{{ asset('admin/demo/demo.js') }}"></script>
      <script>
         $(document).ready(function() {
           // Javascript method's body can be found in assets/js/demos.js
           md.initDashboardPageCharts();

         });
      </script>
   </body>
</html>
