@extends('layouts.admin_body') @section('admin_content')
<div class="card">
    <div class="card-header card-header-warning">
        <div class="row">
            <div class="col-lg-10 col-md-10">
                <h4 class="card-title">Carousel</h4>
            </div>
            <div class="col-lg-2 col-md-2">
                <a type="button" class="btn btn-secondary" href="{{ route('admin_carousel.index')}}">Return</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('admin_carousel.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="fileinput fileinput-new text-center table-responsive" data-provides="fileinput">
                  <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                  <div>
                      <span class="btn btn-raised btn-round btn-default btn-file">
                          <span class="fileinput-new">Select image</span>
                          <span class="fileinput-exists">Change</span>
                          <input type="file" name="img_path" />
                      </span>
                      <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                  </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
            <p>Show photo?</p>
                <div class="form-check form-check-radio">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="show" id="show" value="1"  checked >
                        Yes
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                    </label>
                </div>
                <div class="form-check form-check-radio">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="show" id="noshow" value="0">
                        No
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                    </label>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
