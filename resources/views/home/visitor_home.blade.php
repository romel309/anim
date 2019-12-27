@extends('layouts.visitor_body')

@section('head')
@parent
<script type="text/javascript">
      jQuery(document).ready(function($){
      'use strict';
          jQuery('body').backstretch([
            @forelse($carousel as $photo)
            "{{$photo->img_path}}",
            @empty
            "visitor/images/carousel/end.jpg",
            @endforelse
        ], {duration: 5000, fade: 500, centeredY: true });

      $("#mapwrapper").gMap({ controls: false,
            scrollwheel: false,
            markers: [{
                  latitude:40.7566,
          longitude: -73.9863,
              icon: { image: "visitor/images/marker.png",
                  iconsize: [44,44],
                iconanchor: [12,46],
                infowindowanchor: [12, 0] } }],
              icon: {
                  image: "visitor/images/marker.png",
                iconsize: [26, 46],
                  iconanchor: [12, 46],
                  infowindowanchor: [12, 0] },
            latitude:40.7566,
            longitude: -73.9863,
              zoom: 14 });
      });
</script>
@endsection


@section('content')

    <section id="main-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class=" animated-item-1 fade-down"><img class="logo-carousel" src="{{'visitor/images/logo/40&20.png'}}" alt="Responsive image"></a></h2>
                                    <br>
                                    <a class="btn btn-md animation bounce-in" style="color:#d06dac;" href="#services">Recomendations</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->

    <div id="content-wrapper">
        <section id="services" class="white">
            <div class="container">
            <div class="gap"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="center gap fade-down section-heading">
                            <h2 class="main-title">Funcionalidades</h2>
                            <hr>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <i class="fa fa-camera fa fa-md"></i>
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">Entertainments</h3>
                                <p>CRUD de entretenimientos</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <i class="fa fa-ticket fa fa-md"></i>
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">Tags</h3>
                                <p>CRUD de tags y asignación de tags</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <i class="fa fa-star fa fa-md"></i>
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">Ratings</h3>
                                <p>Ratings de entretenimientos</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.row-->
                <div class="gap"></div>
                <div class="row">
                  <div class="col-md-4 col-sm-6">
                      <div class="service-block">
                          <div class="pull-left bounce-in">
                              <i class="fa fa-user fa fa-md"></i>
                          </div>
                          <div class="media-body fade-up">
                              <h3 class="media-heading">Users</h3>
                              <p>CRUD de usuarios</p>
                          </div>
                      </div>
                  </div><!--/.col-md-4-->
                  <div class="col-md-4 col-sm-6">
                      <div class="service-block">
                          <div class="pull-left bounce-in">
                              <i class="fa fa-image fa fa-md"></i>
                          </div>
                          <div class="media-body fade-up">
                              <h3 class="media-heading">Carousel</h3>
                              <p>CRUD del carousel</p>
                          </div>
                      </div>
                  </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <i class="fa fa-cogs fa fa-md"></i>
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">Lists</h3>
                                <p>CRUD de listas y asignación de entretenimientos</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.row-->
            </div>
        </section>


		<section id="single-quote" class="divider-section">
	            <div class="container">
	            	<div class="gap"></div>
	                <div class="row">
	                    <div class='col-md-offset-2 col-md-8 fade-up'>
	                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
	                            <div class="carousel-inner">
	                                <div class="item active">
	                                    <blockquote>
	                                        <div class="row">
	                                            <div class="col-sm-3 text-center">
	                                            </div>
	                                            <div class="col-sm-9">
	                                                <p>Es el amor lo que importa y no lo que diga la gente</p>
	                                            </div>
	                                        </div>
	                                    </blockquote>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="gap"></div>
	      		</div>
  		</section>

        <section id="about-us" class="white">
        	<div class="container">
	            <div id="meet-the-team" class="row">
                  @foreach($users as $user)
	                <div class="col-md-3 col-xs-6">
	                    <div class="center team-member">
                            <div class="team-image">
                                <img class="img-thumbnail img-fluid" src="{{asset($user->img_path)}}" alt="{{$user->name}}">
                            </div>
	                        <div class="team-content fade-up">
	                            <h5>{{$user->name}}<small class="role muted">{{$user->username}}</small></h5>
	                            <p>{{$user->description}}</p>
	                            <a class="btn btn-social btn-facebook" href="{{route('user.show', $user->id)}}"><i class="fa fa-user"></i></a>
	                        </div>
	                    </div>
	                </div>
                  @endforeach
	            </div><!--/#meet-the-team-->
	            <div class="gap"></div>
	            <div class="gap"></div>
            </div>
        </section>

        <section id="stats" class="divider-section">
            <div class="gap"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class="pe-7s-user bounce-in"></span></span>
                            <h1><span class="counter">{{$users->count()}}</span></h1>
                            <h3>Usuarios</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class="pe-7s-light bounce-in"></span></span>
                            <h1><span class="counter">{{$entertainments->count()}}</span></h1>
                            <h3>Entertainments</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class="pe-7s-box2 bounce-in"></span></span>
                            <h1><span class="counter">{{$catalogs->count()}}</span></h1>
                            <h3>Lists</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class="pe-7s-graph1 bounce-in"></span></span>
                            <h1><span class="counter">{{$tags->count()}}</span></h1>
                            <h3>Tags</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
        </section>

        <section id="portfolio" class="white">
       		<div class="container">
	        	<div class="gap"></div>
		        	<div class="center gap fade-down section-heading">
		                <h2 class="main-title">Nuevas Listas</h2>
		                <hr>
		                <p>No saben que nuestro secreto es tu juventud y mi experiencia.</p>
		            </div>
                @forelse($catalogs as $catalog)
                  <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                      <div class="card"><img src="{{$catalog->thumbnail}}" alt="foto de lista"/>
                          <div class="info">
                            <h1>{{Str::limit($catalog->name, 12, '...')}}</h1>
                            <p>{{Str::limit($catalog->description, 450, '...')}}</p>
                                <a href="{{ route('catalog.show',$catalog->id) }}" class="btn btn-outlined btn-primary">Read more</a>
                            <p> <i class="fa fa-user"></i>   Created By: {{$catalog->user->username}} </p>
                          </div>
                      </div>
                    </div>
                    <div class="gap"></div>
                  </div>
                  <div class="gap"></div>
                  @empty
                  <p class="center">No Lists</p>
                  @endforelse
                </div>
            </section>

            <section id="testimonial-carousel" class="divider-section">
            <div class="gap"></div>
	            <div class="container">
	                <div class="row">
                    	<div class="center gap fade-down section-heading">
                            <h2 class="main-title">Lo que se viene</h2>
                            <hr>
                            <div class="gap"></div>
                        </div>
	                </div>
	                <div class="gap"></div>
	      		</div>
      		</section>

          <section id="blog" class="white">
                <div class="container">
                    <div class="center gap fade-down section-heading">
                   		<div class="gap"></div>
                        <h2 class="main-title">Nuevos Entretenimientos</h2>
                        <hr>
                        <p>Decir que este amor es prohibido que tengo cuarenta y tu veinte.</p>
                    </div>
                    <div class="gap"></div>
                    @forelse($entertainments as $entertainment)
                      <div class="row">
                          <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="post">
                                    <div class="post-img-content">
                                        <img src="{{ asset($entertainment->img_path) }}" class="img-responsive" alt="{{$loop->iteration}}" />
                                        <!---<div class="overlay">
                                            <a class="preview btn btn-outlined btn-primary" href="/entertainment/{{$entertainment->id}}"><i class="fa fa-link"></i></a>
                                        </div>---->
                                    </div>
                                    <div class="content">
                                        <h2 class="post-title">{{Str::limit($entertainment->name, 52, '...')}}</h2>
                                        <div class="author">
                                            <i class="fa fa-user"></i>Created By <b>{{$entertainment->user->username}}</b> | <i class="fa fa-clock-o"></i> <time datetime="2014-01-20">{{$entertainment->created_at}}</time>
                                        </div>
                                        <div>
                                            {{ Str::limit($entertainment->description, 100, '...')}}
                                        </div>

                                        @foreach($entertainment->tag as $tag)
                                          <a href="/entertainment?tag={{$tag->name}}">  <span class="badge badge-dark">{{$tag->name}}</span> </a>
                                        @endforeach

                                        <div class="read-more-wrapper">
                                            <a href="/entertainment/{{$entertainment->id}}" class="btn btn-outlined btn-primary">Read more</a>
                                        </div>
                                    </div>
                                </div>
                          </div>
                      </div>
                      @empty
                      <p class="center">No Entertainment</p>
                @endforelse
                </div>
       		</section>

            <section id="pricing" class="white">
                <div class="container">
                    <div class="center gap fade-down section-heading">
                        <h2 class="main-title">Series con mayor rating</h2>
                        <hr>
                        <p>Of an or game gate west face shed. ﻿no great but music too old found arose.</p>
                    </div>
                    <div class="gap"></div>
                    <div id="pricing-table" class="row">
                        <div class="col-md-3 col-xs-6 flip-in">
                            <ul class="plan plan1">
                                <li class="plan-name">
                                    <h3>Basic</h3>
                                </li>
                                <li class="plan-price">
                                    <div>
                                        <span class="price"><sup>$</sup>10</span>
                                        <small>month</small>
                                    </div>
                                </li>
                                <li>
                                    <strong>5GB</strong> Storage
                                </li>
                                <li>
                                    <strong>1GB</strong> RAM
                                </li>
                                <li>
                                    <strong>400GB</strong> Bandwidth
                                </li>
                                <li>
                                    <strong>10</strong> Email Address
                                </li>
                                <li>
                                    <strong>Forum</strong> Support
                                </li>
                                <li class="plan-action">
                                    <a href="#" class="btn btn-outlined btn-primary btn-md btn-white">Signup</a>
                                </li>
                            </ul>
                        </div><!--/.col-md-3-->
                        <div class="col-md-3 col-xs-6 flip-in">
                            <ul class="plan plan2 featured">
                                <li class="plan-name">
                                    <h3>Standard</h3>
                                </li>
                                <li class="plan-price">
                                    <div>
                                        <span class="price"><sup>$</sup>20</span>
                                        <small>month</small>
                                    </div>
                                </li>
                                <li>
                                    <strong>5GB</strong> Storage
                                </li>
                                <li>
                                    <strong>1GB</strong> RAM
                                </li>
                                <li>
                                    <strong>400GB</strong> Bandwidth
                                </li>
                                <li>
                                    <strong>10</strong> Email Address
                                </li>
                                <li>
                                    <strong>Forum</strong> Support
                                </li>
                                <li class="plan-action">
                                    <a href="#" class="btn btn-outlined btn-primary btn-md">Signup</a>
                                </li>
                            </ul>
                        </div><!--/.col-md-3-->
                        <div class="col-md-3 col-xs-6 flip-in">
                            <ul class="plan plan3">
                                <li class="plan-name">
                                    <h3>Advanced</h3>
                                </li>
                                <li class="plan-price">
                                    <div>
                                        <span class="price"><sup>$</sup>40</span>
                                        <small>month</small>
                                    </div>
                                </li>
                                <li>
                                    <strong>50GB</strong> Storage
                                </li>
                                <li>
                                    <strong>8GB</strong> RAM
                                </li>
                                <li>
                                    <strong>1024GB</strong> Bandwidth
                                </li>
                                <li>
                                    <strong>Unlimited</strong> Email Address
                                </li>
                                <li>
                                    <strong>Forum</strong> Support
                                </li>
                                <li class="plan-action">
                                    <a href="#" class="btn btn-outlined btn-primary btn-md btn-white">Signup</a>
                                </li>
                            </ul>
                        </div><!--/.col-md-3-->
                        <div class="col-md-3 col-xs-6 flip-in">
                            <ul class="plan plan4">
                                <li class="plan-name">
                                    <h3>Mighty</h3>
                                </li>
                                <li class="plan-price">
                                    <div>
                                        <span class="price"><sup>$</sup>100</span>
                                        <small>month</small>
                                    </div>
                                </li>
                                <li>
                                    <strong>50GB</strong> Storage
                                </li>
                                <li>
                                    <strong>8GB</strong> RAM
                                </li>
                                <li>
                                    <strong>1024GB</strong> Bandwidth
                                </li>
                                <li>
                                    <strong>Unlimited</strong> Email Address
                                </li>
                                <li>
                                    <strong>Forum</strong> Support
                                </li>
                                <li class="plan-action">
                                    <a href="#" class="btn btn-outlined btn-primary btn-md btn-white">Signup</a>
                                </li>
                            </ul>
                        </div><!--/.col-md-3-->
                    </div>
                    <div class="gap"></div>
                </div>
            </section>


        </div>
@endsection
