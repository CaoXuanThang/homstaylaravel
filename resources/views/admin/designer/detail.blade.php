@extends('admin.layout')
@section('sidebar')
    <div class="sidebar pe-4 pb-3">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    
                  <div class="navbar-nav w-100 ps-2">
                    <a href="{{ route('main') }}" class="nav-item nav-link  "><i class="fa-solid fa-house me-2" style="color: #20ee84; "></i> Home</a>
                    <a href="{{ route('real_estate_category.list') }}" class="nav-item nav-link "><i class="fa-solid fa-hotel me-2" style="color: #27511f;"></i>  Real estate</a>
                    <a href="{{ route('real_estate.list') }}" class="nav-item nav-link "><i class="fa-solid fa-hotel me-2" style="color: #ce763b;"></i> Real estate</a>
                    <a href="{{ route('new_category.list') }}" class="nav-item nav-link "><i class="fa-solid fa-plus me-2" style="color: #1f5137;"></i> NewCategory</a>
                    <a href="{{ route('new.list') }}" class="nav-item nav-link "><i class="fa-solid fa-newspaper me-2" style="color: #51371f;"></i> New</a>
                    <a href="{{ route('marketing_banner.list') }}" class="nav-item nav-link "><i class="fa-regular fa-images me-2" style="color: #9d18a0;"></i> marketing Banner</a>
                    <a href="{{ route('contact.list') }}" class="nav-item nav-link "><i class="fa-solid fa-envelope-open-text me-2" style="color: #01da42;"></i> Contact</a>
                    <a href="{{ route('designer.list') }}" class="nav-item nav-link active"><i class="fa-solid fa-person-rays fa-bounce me-2" style="color: #2562cb;"></i>  Designer</a>
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