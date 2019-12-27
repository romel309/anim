@extends('layouts.admin_body')
@section('admin_content')
 <div class="card">
    <div class="card-header card-header-primary">
      <div class="row">
        <div class="col-lg-10 col-md-10">
          <h4 class="card-title">Users</h4>
        </div>
        <div class="col-lg-2 col-md-2">
          <a type="button" class="btn btn-secondary" href="{{ route('admin_user.create')}}">Create</a>
        </div>
     </div>
    </div>
    <div class="card-body table-responsive">
       <table class="table table-hover">
          <thead class="text-primary center">
             <th>Username</th>
             <th>Show</th>
             <th>Edit</th>
             <th>Delete</th>
          </thead>
          <tbody>
             @forelse($users as $user)
             <tr>
                <td>{{$user->username}}</td>
                <td><a class="btn btn-info btn-link btn-sm" href="{{ route('user.show',$user->id) }}" target="_blank" ><i class="material-icons">remove_red_eye</i></a></td>
                <td><a class="btn btn-primary btn-link btn-sm" href="{{ route('admin_user.edit',$user->id) }}" ><i class="material-icons">edit</i></a></td>
                <td>
                  @if($user->id != 1 && Auth::user()->id != $user->id)
                  <button type="button"  data-toggle="modal" data-target="#eliminarUser{{$user->id}}" rel="tooltip" class="btn btn-danger btn-link btn-icon btn-md">
                              <i class="material-icons">delete</i>
                  </button>
                  @endif
                </td>
             </tr>
            <!-- Modal -->
            <div class="modal fade" id="eliminarUser{{$user->id}}" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="eliminarUser{{$user->id}}">¿Seguro que quieres borrar el usuario {{$user->username}}?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <form method="POST" action="{{route('admin_user.delete',$user->id)}}">
                        @csrf
                    <button type="submit" class="btn btn-primary">Accept</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
             @empty
             <p>No Users</p>
             @endforelse
          </tbody>
       </table>
       {{ $users->render() }}
    </div>
 </div>
@endsection
