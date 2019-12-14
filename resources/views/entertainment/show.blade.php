@extends('layouts.visitor_body')
@section('content')

<div id="content-wrapper">
  <section id="services" class="white">
      <div class="container">
      <div class="gap"></div>
          <div class="row">
              <div class="col-md-6">
                 <img class="img-responsive" src="{{ asset($entertainment->img_path) }}">
              </div>
              <div class="col-md-6">
                  <div >
                      <h2 class="main-title">{{$entertainment->name}} </h2>
                      <hr>
                      <p>{{$entertainment->description}}</p>
                  </div>
              </div>
          </div>
      </div>
    </section>
</div>

@endsection
