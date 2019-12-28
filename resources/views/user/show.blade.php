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
      </div>
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <h2 class="main-title">Entertainments created</h2>
                    @forelse($user->entertainments as $entertainment)
                    <div class="card">
                      <div class="row">
                          <div class="col-sm-4 col-md-4 col-lg-4">
                            <h3 class="card-header"><img class="img-responsive" src="{{ asset($entertainment->img_path) }}"></h3>
                          </div>
                          <div class="col-sm-8 col-md-8 col-lg-8">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <a href="/entertainment/{{$entertainment->id}}"><h4 class="card-text">{{$entertainment->name}}</h4></a>
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
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <h2 class="main-title">Lists created</h2>
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
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <h2 class="main-title">Recent ratings</h2>
                  @forelse($user->ratings as $entertainment_rated)
                  <div class="card">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4">
                          <h3 class="card-header"><img class="img-responsive" src="{{ asset($entertainment_rated->img_path) }}"></h3>
                        </div>
                        <div class="col-sm-8 col-md-8 col-lg-8">
                          <div class="card-body">
                              <h5 class="card-title"></h5>
                              <a href="{{request('entertainment.show', $entertainment_rated->id)}}"><h4 class="card-text">{{$entertainment_rated->name}}
                              <i style="color:#FFD700;" class="fa fa-star"></i> {{$entertainment_rated->pivot->rating}}</h4></a>
                              <p>{{$entertainment_rated->description}}</p>
                              @foreach($entertainment_rated->tag as $tag)
                                <a data-toggle="popover" data-content="Some content inside the popover" href="/entertainment?tag={{$tag->name}}">  <span class="badge badge-dark">{{$tag->name}}</span> </a>
                              @endforeach
                          </div>
                        </div>
                    </div>
                  </div>
                  @empty
                  <p>No ratings</p>
                  @endforelse
                </div>
            </div>

    </section>
</div>
@endsection
