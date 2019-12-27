@extends('layouts.visitor_body')
@section('content')

<div id="content-wrapper">
    <section id="about-us" class="white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="gap fade-down section-heading">
                        <h2 class="main-title">Users</h2>
                    </div>
                </div>
            </div>
            <div id="meet-the-team">
                @forelse($users->chunk(3) as $chunk)
                <div class="row">
                    @foreach($chunk as $user)
                    <div class="col-md-4 col-xs-4">
                        <div class="center team-member">
                            <div class="team-image">
                                <img class="img-thumbnail" src="{{asset($user->img_path)}}" alt="{{$user->name}}">
                            </div>
                            <div class="team-content fade-up">
                                <h5>{{$user->name}}<small class="role muted">{{$user->username}}</small></h5>
                                <p>{{$user->description}}</p>
                                <a href="{{route('user.show', $user->id)}}" type="button" class="btn btn-primary">Profile</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="gap"></div>
                @empty
                <p>No Users</p>
                @endforelse {{ $users->links() }}
            </div>
            <!--/#meet-the-team-->
            <div class="gap"></div>
        </div>
    </section>
</div>
@endsection
