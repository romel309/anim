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
                  <i class="fa fa-clock-o"></i> <time datetime="2014-01-20">Updated at: {{ $entertainment->updated_at}}</time> |
                  <i style="color:#FFD700;" class="fa fa-star"></i> Average: {{$entertainment->avg_ratings($entertainment)}}
              </div>
            </div>
        </div>
          <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-6">
                 <img class="img-responsive" src="{{ asset($entertainment->img_path) }}">
                 <div class="row">
                   @guest
                   <div class="col-sm-12 col-md-12 col-lg-12">
                     <h5> <i class="fa fa-star"></i>You need to <a style="color:blue;" href="/login">login</a> to rate Entertainments</h5>
                   </div>
                   @else
                   <div class="col-sm-12 col-md-12 col-lg-12">
                    @if($rating)
                      <p>Rating by {{Auth::user()->username}}: <i style="color:#FFD700;" class="fa fa-star"></i> {{$rating}}</p>
                      <form method="POST" action="{{route('rating.update', $entertainment->id)}}" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                            <label for="rating">Rating:</label>
                            <select name="rating" class="form-control" id="rating">
                              @for ($i = 1; $i <= 10; $i++)
                                  @if($i == $rating)
                                  <option selected>{{$i}}</option>
                                  @else
                                  <option>{{$i}}</option>
                                  @endif
                              @endfor
                            </select>
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                       </form>
                    @else
                    <form method="POST" action="{{route('rating.store', $entertainment->id)}}" enctype="multipart/form-data">
                      @csrf
                          <div class="form-group">
                          <label for="rating">Rating:</label>
                          <select name="rating" class="form-control" id="rating">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                          </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                     </form>
                    @endif
                    </div>
                  @endguest
                 </div>
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
                        <h2 class="main-title">Other Entertainments</h2>
                    </div>
                    <div class="gap"></div>
                    @forelse($entertainments->chunk(3) as $chunk)
                      <div class="row">
                          @foreach($chunk as $en)
                          @if($en->id != $entertainment->id)
                          <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="post">
                                    <div class="post-img-content">
                                        <img src="{{ asset($en->img_path) }}" class="img-responsive" alt="{{$loop->iteration}}" />
                                    </div>
                                    <div class="content">
                                        <h2 class="post-title">{{Str::limit($en->name, 52, '...')}}</h2>
                                        <div class="author">
                                            <i class="fa fa-user"></i>Created By <a href="{{route('user.show',$en->user_id)}}"><b>{{$en->user->username}}</b></a> | <i class="fa fa-clock-o"></i> <time datetime="2014-01-20">{{$entertainment->created_at}}</time>
                                        </div>
                                        <div>
                                            {{ Str::limit($en->description, 100, '...')}}
                                        </div>

                                        @foreach($en->tag as $tag)
                                          <a data-toggle="popover" data-content="Some content inside the popover" href="/entertainment?tag={{$tag->name}}">  <span class="badge badge-dark">{{$tag->name}}</span> </a>
                                        @endforeach

                                        <div class="read-more-wrapper">
                                            <a href="/entertainment/{{$en->id}}" class="btn btn-outlined btn-primary">Read more</a>
                                        </div>
                                    </div>
                                </div>
                          </div>
                          @endif
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
