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
<a href="{{ route('designer.show') }}" class="btn btn-primary">Add</a>
<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Email</th>
            <th>Phone</th>
            {{-- <th>Description</th> --}}
            {{-- <th>FacebooK</th>
            <th>Twitter</th>
            <th>Instagram</th> --}}
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($designer as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td><img src="{{$item->image ? Storage::url($item->image) : ''}}" style="width: 100px; height: 100px" alt=""></td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->phone }}</td>
                {{-- <td>{{ $item->description }}</td> --}}
                {{-- <td>{{ $item->facebook }}</td>
                <td>{{ $item->twitter }}</td>
                <td>{{ $item->instagram }}</td> --}}
                <td>
                    <a href="{{ route('designer.detail', $item->id) }}"><button type="button"
                                class="btn btn-primary">Chi tiết</button></a>
                    <a href="{{ route('designer.showupdate', $item->id) }}"><button type="button"
                            class="btn btn-primary">Edit</button></a>
                    <a href="{{ route('designer.delete', $item->id) }}"><button type="button"
                            class="btn btn-danger">Xóa</button></a>
                </td>
            </tr>
        @endforeach
    </tbody>
    <tr>
        <td colspan="10" class="">
          {{ $designer->links('custom.pagination') }}
        </td>
    </tr>
</table>
@endsection