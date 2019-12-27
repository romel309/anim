@extends('layouts.visitor_body')
@section('content')

<div id="content-wrapper">
  <section id="services" class="white">
      <div class="container">
      <div class="gap"></div>
        <div class="row">
            <div class="col-sm-12 col-md-12  col-lg-12">
              <div class="author">
                  <i class="fa fa-user"></i>Created By <a href="{{route('user.show',$entertainment->user_id)}}"><b>{{$entertainment->user->username}}</b></a> |
                  <i class="fa fa-clock-o"></i> <time datetime="2014-01-20">Created at: {{$entertainment->created_at}}</time> |
                  <i class="fa fa-clock-o"></i> <time datetime="2014-01-20">Updated at: {{ $entertainment->updated_at}}</time>
              </div>
            </div>
        </div>
          <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-6">
                 <img class="img-responsive" src="{{ asset($entertainment->img_path) }}">
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6">
                  <div >
                      <h2 class="main-title">{{$entertainment->name}} </h2>
                      @foreach($entertainment->tag as $tag)
                        <a href="/entertainment?tag={{$tag->name}}">  <span class="badge badge-dark">{{$tag->name}}</span> </a>
                      @endforeach
                      <hr>
                      @if($iframeyoutube)
                      <p>{{$entertainment->description}}</p>
                      <!-- 16:9 aspect ratio -->
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" allowfullscreen src="{{$iframeyoutube}}"></iframe>
                      </div>

                      <br>
                      @else
                      <p>{{$entertainment->description}}</p>
                      @endif

                  </div>
              </div>
          </div>
          <div class="row">
            <section id="blog" class="white">
                <div class="container">
                    <div class="gap fade-down section-heading">
                      <div class="gap"></div>
                        <h2 class="main-title">Other Entretainment</h2>
                    </div>
                    <div class="gap"></div>
                    @forelse($entertainments->chunk(3) as $chunk)
                      <div class="row">
                          @foreach($chunk as $entertainment)
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
                                            <i class="fa fa-user"></i>Created By <a href="{{route('user.show',$entertainment->user_id)}}"><b>{{$entertainment->user->username}}</b></a> | <i class="fa fa-clock-o"></i> <time datetime="2014-01-20">{{$entertainment->created_at}}</time>
                                        </div>
                                        <div>
                                            {{ Str::limit($entertainment->description, 100, '...')}}
                                        </div>

                                        @foreach($entertainment->tag as $tag)
                                          <a data-toggle="popover" data-content="Some content inside the popover" href="/entertainment?tag={{$tag->name}}">  <span class="badge badge-dark">{{$tag->name}}</span> </a>
                                        @endforeach

                                        <div class="read-more-wrapper">
                                            <a href="/entertainment/{{$entertainment->id}}" class="btn btn-outlined btn-primary">Read more</a>
                                        </div>
                                    </div>
                                </div>
                          </div>
                          @endforeach
                      </div>
                      @empty
                      <p>No Entertainment</p>
                @endforelse
                </div>
            </section>
          </div>
      </div>
    </section>
</div>

@endsection
