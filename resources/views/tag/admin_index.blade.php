@extends('layouts.admin_body')
@section('admin_content')
 <div class="card">
    <div class="card-header card-header-warning">
      <div class="row">
        <div class="col-lg-10 col-md-10">
          <h4 class="card-title">Tags</h4>
        </div>
        <div class="col-lg-2 col-md-2">
          <a type="button" class="btn btn-secondary" href="{{ route('admin_tag.create')}}">Create</a>
        </div>
     </div>
    </div>
    <div class="card-body table-responsive">
       <table class="table table-hover">
          <thead class="text-warning center">
             <th>Name</th>
             <th>Description</th>
             <th>Edit</th>
             <th>Delete</th>
          </thead>
          <tbody>
             @forelse($tags as $tag)
             <tr>
                <td>{{$tag->name}}</td>
                <td>{{$tag->description}}</td>
                <td><a class="btn btn-primary btn-link btn-sm" href="{{ route('admin_tag.edit',$tag->id) }}" ><i class="material-icons">edit</i></a></td>
                <td>
                  <button type="button"  data-toggle="modal" data-target="#eliminarTag{{$tag->id}}" rel="tooltip" class="btn btn-danger btn-link btn-icon btn-md">
                              <i class="material-icons">delete</i>
                  </button>
                </td>
             </tr>
            <!-- Modal -->
            <div class="modal fade" id="eliminarTag{{$tag->id}}" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="eliminarTag{{$tag->id}}">¿Seguro que quieres borrar el tag {{$tag->name}}?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <form method="POST" action="{{route('admin_tag.delete',$tag->id)}}">
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
       {{ $tags->render() }}
    </div>
 </div>
@endsection
