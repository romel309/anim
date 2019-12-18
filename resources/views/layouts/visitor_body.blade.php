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
    <script src="{{ asset('visitor/js/jquery.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ asset('visitor/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('visitor/images/ico/apple-touch-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('visitor/images/ico/apple-touch-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('visitor/images/ico/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" href="{{ asset('visitor/images/ico/apple-touch-icon-57x57.png')}}" >
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
                   <a class="navbar-brand" href="{{ route('home.show') }}"><h1><span class="pe-7s-gleam bounce-in"></span>40Y20</h1></a>
              </div>
              <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav navbar-right">
                      <li><a href="{{ route('home.show') }}">Home</a></li>
                      <li><a href="{{ route('catalog.index') }}">Lists</a></li>
                      <li><a href="{{ route('entertainment.index') }}">Entertainment</a></li>
                      <li><a href="">Users</a></li>
                      <li><a href="">Tags</a></li>
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
                <div class="col-md-3 col-sm-6 about-us-widget">
                    <h4>Global Coverage</h4>
                    <p>Was drawing natural fat respect husband. An as noisy an offer drawn blush place. These tried for way joy wrote witty. In mr began music weeks after at begin.</p>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Company</h4>
                    <div>
                        <ul class="arrow">
                            <li><a href="#">Company Overview</a></li>
                            <li><a href="#">Meet The Team</a></li>
                            <li><a href="#">Our Awesome Partners</a></li>
                            <li><a href="#">Our Services</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Latest Articles</h4>
                    <div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="visitor/images/portfolio/folio01.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Blog Post A</a></span>
                                <small class="muted">Posted 14 April 2014</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="visitor/images/portfolio/folio02.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Blog Post B</a></span>
                                <small class="muted">Posted 14 April 2014</small>
                            </div>
                        </div>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Come See Us</h4>
                    <address>
                        <strong>Ace Towers</strong><br>
                        New York Ave,<br>
                        New York, 215648<br>
                        <abbr title="Phone"><i class="fa fa-phone"></i></abbr> 546 840654 05
                    </address>
                </div> <!--/.col-md-3-->
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
