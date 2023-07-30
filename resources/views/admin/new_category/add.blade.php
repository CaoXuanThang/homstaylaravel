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
                    <a href="{{ route('new_category.list') }}" class="nav-item nav-link active"><i class="fa fa-keyboard me-2"></i>NewCategory</a>
                    <a href="{{ route('new.list') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>New</a>
                    <a href="{{ route('marketing_banner.list') }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>marketing Banner</a>
                    <a href="{{ route('contact.list') }}" class="nav-item nav-link "><i class="fa fa-chart-bar me-2"></i>Contact</a>
                    <a href="{{ route('designer.list') }}" class="nav-item nav-link "><i class="fa fa-chart-bar me-2"></i> Designer</a>
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
                <h6 class="mb-4">Thêm Danh Mục Tin Tức</h6>
                <form action="{{ route('new_category.create') }}" method="POST">
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" >
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
       
    </div>
</div>
@endsection