@extends('layouts.admin_body')
@section('admin_content')

<div class="content">
   <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12">
           <div class="card">
              <div class="card-header card-header-warning">
                <div class="row">
                  <div class="col-lg-10 col-md-10">
                    <h4 class="card-title">Tags</h4>
                  </div>
                  <div class="col-lg-2 col-md-2">
                    <a class="btn btn-secondary btn-link btn-sm" href="{{ route('admin_tag.create')}}"><i class="material-icons md-36">note_add</i></a>
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
                          <td><a class="btn btn-danger btn-link btn-sm" hfref=""><i class="material-icons">close</i></a></td>
                       </tr>
                       @empty
                       <p>No tags</p>
                       @endforelse
                       {{ $tags->links() }}
                    </tbody>
                 </table>
              </div>
           </div>
        </div>
      </div>
    </div>
  </div>

@endsection
