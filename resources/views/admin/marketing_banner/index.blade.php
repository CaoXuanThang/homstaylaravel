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
                    <a href="{{ route('marketing_banner.list') }}" class="nav-item nav-link active"><i class="fa fa-chart-bar me-2"></i>marketing Banner</a>
                    <a href="{{ route('contact.list') }}" class="nav-item nav-link "><i class="fa fa-chart-bar me-2"></i>Contact</a>
                    <a href="{{ route('designer.list') }}" class="nav-item nav-link "><i class="fa fa-chart-bar me-2"></i> Designer</a>
                </div>
                </ul>
            </div>
        </nav>
    </div>
@endsection
@section('content')
<a href="{{ route('marketing_banner.show') }}" class="btn btn-primary">Add</a>
<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($marketing_banner as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td><img src="{{$item->image ? Storage::url($item->image) : ''}}" style="width: 100px; height: 100px" alt=""></td>
                
                
                <td>
                    <a href="{{ route('marketing_banner.showupdate', $item->id) }}"><button type="button"
                            class="btn btn-primary">Edit</button></a>
                    <a href="{{ route('marketing_banner.delete', $item->id) }}"><button type="button"
                            class="btn btn-danger">Xóa</button></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection