@extends('admin.layout')
@section('sibebar')
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-light navbar-light">
            <a href="index.html" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="{{asset('img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                    <div
                        class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                    </div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0">Jhon Doe</h6>
                    <span>Admin</span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="{{ route('main') }}" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Home</a>

                <a href="{{ route('real_estate_category.list') }}" class="nav-item nav-link "><i class="fa fa-laptop me-2"></i>Real category</a>
                <a href="{{ route('real_estate') }}" class="nav-item nav-link "><i class="fa fa-th me-2"></i>Real estate</a>
                <a href="{{ route('new_category.list') }}" class="nav-item nav-link active"><i class="fa fa-keyboard me-2"></i>New Category</a>
                <a href="{{ route('new') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>New</a>
                <a href="{{ route('marketing_banner') }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>marketing Banner</a>

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