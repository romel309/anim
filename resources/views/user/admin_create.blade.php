@extends('layouts.admin_body')
@section('admin_content')
 <div class="card">
    <div class="card-header card-header-primary">
      <div class="row">
        <div class="col-lg-10 col-md-10">
          <h4 class="card-title">Users</h4>
        </div>
        <div class="col-lg-2 col-md-2">
          <a type="button" class="btn btn-secondary" href="{{ route('admin_user.index')}}">Return</a>
        </div>
     </div>
    </div>
    <div class="card-body table-responsive">
      <form method="POST" action="{{route('admin_user.store')}}" enctype="multipart/form-data">
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
              <input type="text" name="name" required class="form-control" maxlength="50" id="name" aria-describedby="nameHelp" placeholder="David" value="{{ old('name')}}">
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" maxlength="255" rows="4" placeholder="Me niego a perderte, a más nunca verte." required>{{ old('description')}}</textarea>
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <div class="form-group">
              <label for="email">Email (Optional)</label>
              <input type="email" name="email" class="form-control" maxlength="100" id="email" aria-describedby="email" placeholder="david@hotmail.com" value="{{ old('email')}}">
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" name="username" class="form-control" maxlength="100" id="username" aria-describedby="username" placeholder="david_caliente" value="{{ old('username')}}" required>
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" maxlength="100" id="password" aria-describedby="password" required>
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <div class="form-group">
              <label for="password">Confirm password</label>
              <input type="password" name="password_confirmation" class="form-control" maxlength="100" id="password_confirmation" aria-describedby="password_confirmation" required>
            </div>
          </div>
        </div>
      </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
     </form>
    </div>
 </div>

@endsection
