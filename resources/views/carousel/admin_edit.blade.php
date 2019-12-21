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
        <form method="POST" action="{{route('admin_carousel.update', $carousel->id)}}">
            @csrf
            <div class="row">
            <div class="table-responsive">
              <img src="{{asset($carousel->img_path)}}" alt="image">
            </div>
            <div class="col-lg-12 col-md-12">
            <p>Show photo?</p>
                <div class="form-check form-check-radio">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="show" id="show" value="1" @if($carousel->show == 1) checked @endif >
                        Yes
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                    </label>
                </div>
                <div class="form-check form-check-radio">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="show" id="noshow" value="0" @if($carousel->show == 0) checked @endif>
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
