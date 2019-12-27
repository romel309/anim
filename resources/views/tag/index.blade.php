@extends('layouts.visitor_body') @section('content')
<div id="content-wrapper">
    <section id="portfolio" class="white">
        <div class="container">
            <div class="gap"></div>
            <div class=" gap fade-down section-heading">
                <h2 class="main-title">Tags</h2>
            </div>
            @forelse($tags->chunk(3) as $chunk)
            <div class="row">
                @foreach($chunk as $tag)
                <div class="col-sm-4 col-md-4 col-lg-4 d-flex align-items-stretch">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$tag->name}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$tag->created_at}}</h6>
                            <p class="card-text">{{$tag->description}}</p>
                            <a href="/entertainment?tag={{$tag->name}}" class="btn btn-primary">View entertainments</a>
                        </div>
                    </div>
                </div>
                <div class="gap"></div>
                @endforeach
            </div>
            <div class="gap"></div>
            @empty
            <p>No Tags</p>
            @endforelse {{ $tags->links() }}
        </div>
    </section>
</div>
@endsection
