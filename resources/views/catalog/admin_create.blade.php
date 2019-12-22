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
      <form method="POST" action="{{route('admin_catalog.store')}}" enctype="multipart/form-data">
      @csrf
      <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
          <div class="fileinput-new thumbnail img-raised">
              <img src="http://style.anu.edu.au/_anu/4/images/placeholders/person_8x10.png" alt="image_preview">
          </div>
          <span class="btn btn-raised btn-round btn-default btn-file">
              <span class="fileinput-new">Select image</span>
              <span class="fileinput-exists">Change</span>
              <input type="file" name="thumbnail" accept="image/*" />
          </span>
          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" required class="form-control" maxlength="50" id="name" aria-describedby="nameHelp" placeholder="Top 10 40y20" value="{{ old('name')}}">
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" maxlength="255" rows="12" placeholder="Esta lista sirve para mostrar mi top 10 de series donde existen relaciones amorosas de una gran diferencia de edad." required>{{ old('description')}}</textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 text-center">
        <h5>Entertainments</h5>
        @foreach($entertainments as $entertainment)
        <div class="form-check form-check-inline">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" id="{{$entertainment->name}}" name="ente[]" value="{{$entertainment->id}}"> {{$entertainment->name}}
            <span class="form-check-sign">
                <span class="check"></span>
            </span>
          </label>
        </div>
        @endforeach
      </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
     </form>
    </div>
 </div>

@endsection
