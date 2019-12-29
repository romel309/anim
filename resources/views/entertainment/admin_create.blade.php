@extends('layouts.admin_body')
@section('admin_content')
 <div class="card">
    <div class="card-header card-header-info">
      <div class="row">
        <div class="col-lg-10 col-md-10">
          <h4 class="card-title">Entertainments</h4>
        </div>
        <div class="col-lg-2 col-md-2">
          <a type="button" class="btn btn-secondary" href="{{ route('admin_entertainment.index')}}">Return</a>
        </div>
     </div>
    </div>
    <div class="card-body table-responsive">
      <form method="POST" action="{{route('admin_entertainment.store')}}" enctype="multipart/form-data">
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
              <input type="file" name="img_path" accept="image/*" />
          </span>
          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" required class="form-control" maxlength="50" id="name" aria-describedby="nameHelp" placeholder="School days" value="{{ old('name')}}">
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" maxlength="2500" rows="12" placeholder="Makoto Itō viaja a la escuela en tren todos los días. Al comienzo de su segundo período, se enamora de una chica, llamada Kotonoha Katsura, quien asiste a la misma escuela y viaja en el mismo transporte, pero no están en la misma clase. Haciendo caso a una leyenda urbana le toma una fotografía con su teléfono móvil (si tienes la fotografía de la persona que te guste y nadie se da cuenta tu amor se hará realidad). Su compañera de mesa, Sekai Saionji, observa la foto durante una clase y se compromete a ayudarlo en concretar una relación amorosa con Kotonoha, a pesar del hecho de que, aunque Makoto no lo sabe, Sekai está enamorada de él. Así, los tres terminan vinculados en un triángulo amoroso, que le va a traer muchos problemas a Makoto y principalmente a Kotonoha." required>{{ old('description')}}</textarea>
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <div class="form-group">
              <label for="youtube_link">Youtube link (optional)</label>
              <input type="text" name="youtube_link" class="form-control" maxlength="100" id="youtube_link" aria-describedby="youtube_link" placeholder="https://www.youtube.com/watch?v=9Gd6u8nCIW4" value="{{ old('youtube_link')}}">
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 text-center">
        <h5>Tags</h5>
        @foreach($tags as $tag)
        <div class="form-check form-check-inline">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" id="{{$tag->name}}" name="tagging[]" value="{{$tag->id}}"> {{$tag->name}}
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
