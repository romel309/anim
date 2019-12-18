@extends('layouts.visitor_body')
@section('content')

<div id="content-wrapper">
  <section id="services" class="white">
      <div class="container">
      <div class="gap"></div>
          <div class="row">
              <div class="col-md-12">
                <h4>{{$catalog->name}} </h4>
                <div class="author">
                    <i class="fa fa-user"></i>Created By <b>{{$catalog->user->username}}</b> |
                    <i class="fa fa-clock-o"></i> <time datetime="2014-01-20">Created at: {{$catalog->created_at}}</time> |
                    <i class="fa fa-clock-o"></i> <time datetime="2014-01-20">Updated at: {{ $catalog->updated_at}}</time>
                </div>
                <p>{{$catalog->description}}</p>
              </div>
          </div>

          @forelse($catalog->entertainments->chunk(1) as $chunk)
          <div class="row">
              @foreach($chunk as $entertainment)
              <div class="col-md-6">
                <img class="img-responsive" src="{{ asset($entertainment->img_path) }}">
              </div>
              <div class="col-md-6">
                  <h3 class="main-title">{{$loop->parent->iteration}}. {{$entertainment->name}} </h3>
                  <hr>
                  <p>{{$entertainment->description}}</p>
                  @foreach($entertainment->tag as $tag)
                    <a href="/entertainment?tag={{$tag->name}}">  <span class="badge badge-dark">{{$tag->name}}</span> </a>
                  @endforeach
              </div>
              @endforeach
              <div class="gap"></div>
          </div>
          @empty
          <p>No Entertainment</p>
          @endforelse

      </div>
    </section>
</div>

@endsection
