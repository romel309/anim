@extends('layouts.admin_body')
@section('admin_content')
 <div class="card">
    <div class="card-header card-header-info">
      <div class="row">
        <div class="col-lg-10 col-md-10">
          <h4 class="card-title">Entertainments</h4>
        </div>
        <div class="col-lg-2 col-md-2">
          <a type="button" class="btn btn-secondary" href="{{ route('admin_entertainment.create')}}">Create</a>
        </div>
     </div>
    </div>
    <div class="card-body table-responsive">
       <table class="table table-hover">
          <thead class="text-info center">
             <th>Name</th>
             <th>Show</th>
             <th>Edit</th>
             <th>Delete</th>
          </thead>
          <tbody>
             @forelse($entertainments as $entertainment)
             <tr>
                <td>{{$entertainment->name}}</td>
                <td><a class="btn btn-info btn-link btn-sm" href="{{ route('entertainment.show',$entertainment->id) }}" target="_blank" ><i class="material-icons">remove_red_eye</i></a></td>
                <td><a class="btn btn-primary btn-link btn-sm" href="{{ route('admin_entertainment.edit',$entertainment->id) }}" ><i class="material-icons">edit</i></a></td>
                <td>
                  <button type="button"  data-toggle="modal" data-target="#eliminarEntertainment{{$entertainment->id}}" rel="tooltip" class="btn btn-danger btn-link btn-icon btn-md">
                              <i class="material-icons">delete</i>
                  </button>
                </td>
             </tr>
            <!-- Modal -->
            <div class="modal fade" id="eliminarEntertainment{{$entertainment->id}}" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="eliminarEntertainment{{$entertainment->id}}">¿Seguro que quieres borrar el entretenimiento {{$entertainment->name}}?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <form method="POST" action="{{route('admin_entertainment.delete',$entertainment->id)}}">
                        @csrf
                    <button type="submit" class="btn btn-primary">Accept</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
             @empty
             <p>No tags</p>
             @endforelse
          </tbody>
       </table>
       {{ $entertainments->render() }}
    </div>
 </div>
@endsection
