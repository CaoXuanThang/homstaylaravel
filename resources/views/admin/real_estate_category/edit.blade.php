@extends('admin.layout')
@section('sidebar')
    <div class="sidebar pe-4 pb-3">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        
                      <div class="navbar-nav w-100 ps-2">
                        <a href="{{ route('main') }}" class="nav-item nav-link  "><i class="fa-solid fa-house me-2" style="color: #20ee84; "></i> Home</a>
                        <a href="{{ route('real_estate_category.list') }}" class="nav-item nav-link active"><i class="fa-solid fa-hotel me-2" style="color: #27511f;"></i>  Real estate</a>
                        <a href="{{ route('real_estate.list') }}" class="nav-item nav-link "><i class="fa-solid fa-hotel me-2" style="color: #ce763b;"></i> Real estate</a>
                        <a href="{{ route('new_category.list') }}" class="nav-item nav-link"><i class="fa-solid fa-plus me-2" style="color: #1f5137;"></i> NewCategory</a>
                        <a href="{{ route('new.list') }}" class="nav-item nav-link"><i class="fa-solid fa-newspaper me-2" style="color: #51371f;"></i> New</a>
                        <a href="{{ route('marketing_banner.list') }}" class="nav-item nav-link"><i class="fa-regular fa-images me-2" style="color: #9d18a0;"></i> marketing Banner</a>
                        <a href="{{ route('contact.list') }}" class="nav-item nav-link "><i class="fa-solid fa-envelope-open-text me-2" style="color: #01da42;"></i> Contact</a>
                        <a href="{{ route('designer.list') }}" class="nav-item nav-link "><i class="fa-solid fa-person-rays fa-bounce me-2" style="color: #2562cb;"></i>  Designer</a>
                    </div>
                    </ul>
                </div>
            </nav>
    </div>
@endsection
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Sửa bất động sản</h6>
                <form action="{{ route('real_estate_category.update',$real_estate_categories->id) }}" method="POST">
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$real_estate_categories->name}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" value="{{$real_estate_categories->description}}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
       
    </div>
</div>

@endsection
