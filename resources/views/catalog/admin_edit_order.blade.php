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
     <form method="POST" action="{{route('admin_catalog.update', $catalog->id)}}" enctype="multipart/form-data">
     @csrf
     <div class="row">
       @foreach($catalog->entertainments as $e)
       <p>{{$e->pivot->id}}</p>
       @endforeach
     </div>
     <button type="submit" class="btn btn-primary">Submit</button>
    </form>
   </div>
</div>

@endsection
