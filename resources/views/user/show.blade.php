@extends('layouts.visitor_body') @section('content')
<div id="content-wrapper">
    <section id="services" class="white">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4"></div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <h2 class="main-title center">{{$user->name}} </h2>
                    <img class="img-responsive" src="{{ asset($user->img_path) }}">
                    <h5 class="center">{{$user->description}}</h5>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4"></div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <h2 class="main-title">Entertainments added</h2>
                    @forelse($user->entertainments as $entertainment)
                    <div class="card">
                      <div class="row">
                          <div class="col-sm-4 col-md-4 col-lg-4">
                            <h3 class="card-header"><img class="img-responsive" src="{{ asset($entertainment->img_path) }}"></h3>
                          </div>
                          <div class="col-sm-8 col-md-8 col-lg-8">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <a href="{{request('entertainment.show', $entertainment->id)}}"><h4 class="card-text">{{$entertainment->name}}</h4></a>
                                <p>{{$entertainment->description}}</p>
                                @foreach($entertainment->tag as $tag)
                                  <a data-toggle="popover" data-content="Some content inside the popover" href="/entertainment?tag={{$tag->name}}">  <span class="badge badge-dark">{{$tag->name}}</span> </a>
                                @endforeach
                            </div>
                          </div>
                      </div>
                    </div>
                    @empty
                    <p>No entertainments</p>
                    @endforelse
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <h2 class="main-title">Lists added</h2>
                  @forelse($user->catalog as $catalog)
                  <div class="card">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4">
                          <h3 class="card-header"><img class="img-responsive" src="{{ asset($catalog->thumbnail) }}"></h3>
                        </div>
                        <div class="col-sm-8 col-md-8 col-lg-8">
                          <div class="card-body">
                              <h5 class="card-title"></h5>
                              <h4 class="card-text">{{$catalog->name}}</h4>
                              <p>{{$catalog->description}}</p>
                          </div>
                        </div>
                    </div>
                  </div>
                  @empty
                  <p>No lists</p>
                  @endforelse
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
