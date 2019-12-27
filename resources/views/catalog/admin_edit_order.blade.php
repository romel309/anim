@extends('layouts.admin_body')
@section('admin_content')
<div class="card">
   <div class="card-header card-header-info">
     <div class="row">
       <div class="col-lg-10 col-md-10">
         <h4 class="card-title">Catalogs</h4>
       </div>
       <div class="col-lg-2 col-md-2">
         <a type="button" class="btn btn-secondary" href="{{ route('admin_catalog.index')}}">Return</a>
       </div>
    </div>
   </div>
   <div class="card-body table-responsive">
     <form method="POST" action="{{route('admin_catalog.updateorder', $catalog->id)}}" enctype="multipart/form-data">
     @csrf
       <table class="table table-hover">
          <thead class="text-info center">
             <th>Name</th>
             <th>Current rank</th>
             <th>New rank</th>
          </thead>
          <tbody>
           @foreach($catalog->entertainments as $entertainment)
           <tr>
           <td>{{$entertainment->name}}</td>
           <td>{{$entertainment->pivot->rank}}</td>
           <td><input type="number" name="n{{$entertainment->pivot->id}}" required class="form-control" id="n{{$entertainment->pivot->id}}" min="0" max="100" value="{{ old('name')}}">
           </td>
           </tr>
           @endforeach
          </tbody>
      <table>
     <button type="submit" class="btn btn-primary">Submit</button>
    </form>
   </div>
</div>

@endsection
