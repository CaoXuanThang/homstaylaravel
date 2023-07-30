@extends('admin.layout')
@section('sidebar')
    <div class="sidebar pe-4 pb-3">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    
                  <div class="navbar-nav w-100 ps-2">
                    <a href="{{ route('main') }}" class="nav-item nav-link  "><i class="fa fa-tachometer-alt me-2"></i>Home</a>
                    <a href="{{ route('real_estate_category.list') }}" class="nav-item nav-link "><i class="fa fa-laptop me-2"></i>Real category</a>
                    <a href="{{ route('real_estate.list') }}" class="nav-item nav-link "><i class="fa fa-th me-2"></i>Real estate</a>
                    <a href="{{ route('new_category.list') }}" class="nav-item nav-link "><i class="fa fa-keyboard me-2"></i>NewCategory</a>
                    <a href="{{ route('new.list') }}" class="nav-item nav-link "><i class="fa fa-table me-2"></i>New</a>
                    <a href="{{ route('marketing_banner.list') }}" class="nav-item nav-link "><i class="fa fa-chart-bar me-2"></i>marketing Banner</a>
                    <a href="{{ route('contact.list') }}" class="nav-item nav-link "><i class="fa fa-chart-bar me-2"></i>Contact</a>
                    <a href="{{ route('designer.list') }}" class="nav-item nav-link active"><i class="fa fa-chart-bar me-2"></i> Designer</a>
                </div>
                </ul>
            </div>
        </nav>
    </div>
@endsection
@section('content')
<form>
    <fieldset disabled>
      <legend>Chi tiết thông tin tác giả</legend>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Name</label>
        <input type="text" id="disabledTextInput" class="form-control" value="{{$designer_detail->name}}">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Avatar</label>
        <img  class="form-control" src="{{ $designer_detail->image ? '' . Storage::url($designer_detail->image) : '' }}" style="width: 100px; height: 100px" />
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Email</label>
        <input type="text" id="disabledTextInput" class="form-control" value="{{$designer_detail->email}}">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Phone</label>
        <input type="text" id="disabledTextInput" class="form-control" value="{{$designer_detail->phone}}">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Description</label>
        <input type="text" id="disabledTextInput" class="form-control"  value="{{$designer_detail->description}}">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Facebook</label>
        <input type="text" id="disabledTextInput" class="form-control" value="{{$designer_detail->facebook}}">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Twitter</label>
        <input type="text" id="disabledTextInput" class="form-control" value="{{$designer_detail->twitter}}">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Instagram</label>
        <input type="text" id="disabledTextInput" class="form-control" value="{{$designer_detail->instagram}}">
      </div>
    </fieldset>
    <a href="{{route('designer.list')}}" class="btn btn-primary mb-3"> List </a>
  </form>

@endsection