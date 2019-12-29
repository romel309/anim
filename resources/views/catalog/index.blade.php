@extends('layouts.visitor_body')
@section('content')

<link href="{{ asset('visitor/css/cards_custom.css') }}" rel="stylesheet">

<div id="content-wrapper">
  <section id="portfolio" class="white">
    <div class="container">
      <div class="gap"></div>
        <div class="gap fade-down section-heading">
              <h2 class="main-title">Listas</h2>
        </div>
        @forelse($catalogs->chunk(3) as $chunk)
          <div class="row">
            @foreach($chunk as $catalog)
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
            @endforeach
          </div>
          <div class="gap"></div>
          @empty
          <p>No Lists</p>
          @endforelse
          {{ $catalogs->links() }}
      </div>
  </section>

</div>
@endsection
