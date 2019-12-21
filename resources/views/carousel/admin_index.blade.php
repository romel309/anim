@extends('layouts.admin_body')
@section('admin_content')
 <div class="card">
    <div class="card-header card-header-primary">
      <div class="row">
        <div class="col-lg-10 col-md-10">
          <h4 class="card-title">Carousel</h4>
        </div>
        <div class="col-lg-2 col-md-2">
          <a type="button" class="btn btn-secondary" href="{{ route('admin_carousel.create')}}">Create</a>
        </div>
     </div>
    </div>
    <div class="card-body table-responsive">
    @forelse($carousel->chunk(3) as $chunk)
     <div class="row">
      @foreach($chunk as $photo)
      <div class="col-lg-4 col-md-4">
        <div class="card d-flex align-items-stretch mb-4">
           <img class="card-img-top" src="{{ asset($photo->img_path) }}" alt="Card image">
           <div class="card-body">
             <h4 class="card-title"></h4>
             <p class="card-text"><small class="text-muted"><i class="material-icons">person</i> Created by: {{$photo->user->username}} </small></p>
             <p class="card-text"><small class="text-muted"><i class="material-icons">access_time</i> Last Updated: {{$photo->updated_at}} </small></p>
             @if($photo->show == 0)
             <p class="card-text"><small class="text-muted"><i class="material-icons">block</i> Is it present: false </small></p>
             @else
             <p class="card-text"><small class="text-muted"><i class="material-icons">done</i> Is it present: true </small></p>
             @endif
           </div>
           <div class="card-footer">
               <a class="btn btn-primary btn-link btn-sm" href="{{ route('admin_carousel.edit',$photo->id) }}" >edit</a>
               <button type="button"  data-toggle="modal" data-target="#eliminarPhoto{{$photo->id}}" rel="tooltip" class="btn btn-danger btn-link btn-icon btn-md">
                           delete
               </button>
          </div>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="eliminarPhoto{{$photo->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="eliminarPhoto{{$photo->id}}">¿Seguro que quieres borrar la foto?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <form method="POST" action="{{route('admin_carousel.delete',$photo->id)}}">
                  @csrf
              <button type="submit" class="btn btn-primary">Accept</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      @endforeach
     </div>
     @empty
     <p>No photographs</p>
     @endforelse
     {{ $carousel->render() }}
    </div>
 </div>
@endsection
