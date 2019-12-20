@extends('layouts.admin_body') @section('admin_content')
<div class="card">
    <div class="card-header card-header-warning">
        <div class="row">
            <div class="col-lg-10 col-md-10">
                <h4 class="card-title">Tags</h4>
            </div>
            <div class="col-lg-2 col-md-2">
                <a type="button" class="btn btn-secondary" href="{{ route('admin_tag.index')}}">Return</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('admin_tag.update',$tag->id)}}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Tag Name</label>
                    <input type="text" class="form-control" maxlength="15" name="name" id="name" placeholder="40y20" value="{{$tag->name}}" required>
                </div>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" maxlength="255" rows="3"
                placeholder="El tag 40y20 sirve para identificar medios de entretenimiento donde la diferencia de edad entre los protagonistas es muy grande"
                required>{{$tag->description}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
