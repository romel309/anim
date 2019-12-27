@extends('layouts.visitor_body')
@section('content')

<div id="content-wrapper">
<section id="blog" class="white">
    <div class="container">
        <div class="gap fade-down section-heading">
          <div class="gap"></div>
            <h2 class="main-title">U</h2>
        </div>
        <div class="gap"></div>
        @forelse($entertainments->chunk(3) as $chunk)
          <div class="row">
              @foreach($chunk as $entertainment)
              <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="post">
                        <div class="post-img-content">
                            <img src="{{ asset($entertainment->img_path) }}" class="img-responsive" alt="{{$loop->iteration}}" />
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
              @endforeach
          </div>
          @empty
          <p>No Entertainment</p>
    @endforelse
    {{ $entertainments->render() }}
    </div>
</section>
</div>
@endsection
