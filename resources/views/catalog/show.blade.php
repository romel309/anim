@extends('layouts.visitor_body')
@section('content')

<div id="content-wrapper">
  <section id="services" class="white">
      <div class="container">
      <div class="gap"></div>
          <div class="row">
              <div class="col-sm-12 col-md-12  col-lg-12">
                <h4>{{$catalog->name}} </h4>
                <div class="author">
                    <i class="fa fa-user"></i>Created By <a href="{{route('user.show',$catalog->user_id)}}"><b>{{$catalog->user->username}}</b></a> |
                    <i class="fa fa-clock-o"></i> <time datetime="2014-01-20">Created at: {{$catalog->created_at}}</time> |
                    <i class="fa fa-clock-o"></i> <time datetime="2014-01-20">Updated at: {{ $catalog->updated_at}}</time>
                </div>
                <p>{{$catalog->description}}</p>
              </div>
          </div>

          @forelse($catalog->entertainments->chunk(1) as $chunk)
          <div class="row">
              @foreach($chunk as $entertainment)
              <div class="col-sm-6 col-md-6  col-lg-6">
                <img class="img-responsive" src="{{ asset($entertainment->img_path) }}">
                <i style="color:#FFD700;" class="fa fa-star"></i>Score:{{$entertainment->avg_ratings($entertainment)}} by {{$entertainment->total_ratings($entertainment)}} users
              </div>
              <div class="col-sm-6 col-md-6  col-lg-6">
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

    <div class="row">
      <section id="blog" class="white">
          <div class="container">
              <div class="gap fade-down section-heading">
                <div class="gap"></div>
                  <h2 class="main-title">Comments</h2>
              </div>
              <div class="row">
              @forelse($catalog->catalog_messages as $message)
              <div class="col-sm-12 col-md-12 col-lg-12">
                <h5><i class="fa fa-comments"></i> {{$message->username}}:</h5>
                <p>{!! nl2br(e($message->pivot->message)) !!}</p>
                <p><i class="fa fa-clock-o"></i> Posted at:{{$message->pivot->created_at}}</p>
              </div>
              @empty
              <div class="col-sm-12 col-md-12 col-lg-12">
                <p>No Messages</p>
              </div>
              @endforelse
              <div class="col-sm-12 col-md-12 col-lg-12">
              @guest
                  <h5> <i class="fa fa-comments"></i>You need to <a style="color:blue;" href="/login">login</a> to comment</h5>
              @else
                <form method="POST" action="{{route('catalog_message.store', $catalog->id)}}" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                      <label for="comment">Comment:</label>
                      <textarea class="form-control" rows="8" name="message" id="message">{{old('message')}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                 </form>
               @endguest
               </div>
              </div>
          </div>
      </section>
    </div>

</div>

@endsection
