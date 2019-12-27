<!DOCTYPE html>
<html lang="en">
<head>
    @section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>40Y20</title>
    <link href="{{ asset('visitor/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('visitor/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('visitor/css/pe-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('visitor/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('visitor/css/animate.css') }}"  rel="stylesheet">
    <link href="{{ asset('visitor/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('visitor/css/logo.css') }}" rel="stylesheet">
    <script src="{{ asset('visitor/js/jquery.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ asset('visitor/images/ico/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" href="{{ asset('visitor/images/ico/apple-touch-icon.png')}}" >
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('visitor/images/ico/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('visitor/images/ico/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('visitor/images/ico/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('visitor/images/ico/site.webmanifest')}}">
    <link rel="mask-icon" href="{{ asset('visitor/images/ico/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    @show

</head><!--/head-->
<body>

  <div id="preloader"></div>
      <header class="navbar navbar-inverse navbar-fixed-top " role="banner">
          <div class="container">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <i class="fa fa-bars"></i>
                  </button>
                   <a class="navbar-brand" href="{{ route('home.show') }}"><img class="logo-nav" src="{{'/visitor/images/logo/40&20.png'}}" alt="Logo"></a>
              </div>
              <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav navbar-right">
                      <li><a href="{{ route('home.show') }}">Home</a></li>
                      <li><a href="{{ route('catalog.index') }}">Lists</a></li>
                      <li><a href="{{ route('entertainment.index') }}">Entertainment</a></li>
                      <li><a href="{{ route('user.index')}}">Users</a></li>
                      <li><a href="{{ route('tag.index')}}">Tags</a></li>
                      <li><span class="search-trigger"><i class="fa fa-search"></i></span></li>
                  </ul>
              </div>
          </div>
      </header><!--/header-->

@yield('content')

<div id="footer-wrapper">
    <section id="bottom" class="">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h4>FAQ</h4>
                    <p>No hubo planeación.</p>
                </div><!--/.col-md-3-->

                <div class="col-md-6 col-sm-12">

                </div><!--/.col-md-3-->


            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    &copy; 2019 40y20. All Rights Reserved. <a href="https://templatemag.com/bootstrap-templates/">Bootstrap templates</a> by TemplateMag.
                </div>
                <div class="col-sm-4">
                    <ul class="pull-right">
                        <li><a id="gototop" class="gototop" href="#"><i class="fa fa-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
</div>

<script src="{{ asset('visitor/js/plugins.js') }}"></script>
<script src="{{ asset('visitor/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('visitor/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('visitor/js/init.js') }}"></script>
</body>
</html>
