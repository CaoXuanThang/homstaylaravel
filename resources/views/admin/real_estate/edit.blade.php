@extends('admin.layout')
@section('sidebar')
    <div class="sidebar pe-4 pb-3">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">

                    <div class="navbar-nav w-100 ps-2">
                        <a href="{{ route('main') }}" class="nav-item nav-link  "><i
                                class="fa fa-tachometer-alt me-2"></i>Home</a>
                        <a href="{{ route('real_estate_category.list') }}" class="nav-item nav-link "><i
                                class="fa fa-laptop me-2"></i>Real category</a>
                        <a href="{{ route('real_estate.list') }}" class="nav-item nav-link active"><i
                                class="fa fa-th me-2"></i>Real estate</a>
                        <a href="{{ route('new_category.list') }}" class="nav-item nav-link"><i
                                class="fa fa-keyboard me-2"></i>NewCategory</a>
                        <a href="{{ route('new.list') }}" class="nav-item nav-link"><i class="fa-solid fa-newspaper me-2" style="color: #51371f;"></i> New</a>
                        <a href="{{ route('marketing_banner.list') }}" class="nav-item nav-link"><i
                                class="fa fa-chart-bar me-2"></i>marketing Banner</a>
                        <a href="{{ route('contact.list') }}" class="nav-item nav-link "><i
                                class="fa fa-chart-bar me-2"></i>Contact</a>
                        <a href="{{ route('designer.list') }}" class="nav-item nav-link "><i
                                class="fa fa-chart-bar me-2"></i> Designer</a>
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
                    <h6 class="mb-4">Thêm loại bất động sản</h6>
                    <form action="{{ route('real_estate.update', $real_estate->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $real_estate->name }}">
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-sm-4 control-label">Ảnh</label>
                            <div class="col-md-9 col-sm-8">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <img id="mat_truoc_preview"
                                            src="{{ $real_estate->image ? '' . Storage::url($real_estate->image) : '' }}"
                                            alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;"
                                            class="img-fluid" />
                                        <input type="file" name="image" accept="image/*"
                                            class="form-control-file @error('image') is-invalid @enderror" id="cmt_truoc">
                                        <label for="cmt_truoc">Mặt trước</label><br />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <input type="text" class="form-control" name="description"
                                value="{{ $real_estate->description }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="text" class="form-control" name="price" value="{{ $real_estate->price }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" value="{{ $real_estate->address }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Baths</label>
                            <input type="number" class="form-control" name="baths" value="{{ $real_estate->baths }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">beds</label>
                            <input type="number" class="form-control" name="beds" value="{{ $real_estate->beds }}">
                        </div>
                        <div class="mb-3 mt-3">
                            <label class="form-label">Loại nhà:</label>
                            <select class="form-select" aria-label="Default select example" name='real_estate_category_id'>
                                
                                @foreach ($real_estate_categories as $item)
                                <option value="{{ $item->id }}"@selected($item->id == $real_estate->real_estate_category_id)>
                                    {{ $item->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label class="form-label">Tác Giả:</label>
                            <select class="form-select" aria-label="Default select example" name='designer_id'>
                                
                                @foreach ($designer as $item)
                                <option value="{{ $item->id }}"@selected($item->id == $real_estate->designer_id)>
                                    {{ $item->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Sửa</button>
                        {{-- <a href="{{ route('real_estate.list') }}" class="btn btn-primary">list</a> --}}
                    </form>
                </div>
            </div>

        </div>
    </div>
@section('script')
    <script>
        $(function() {
            function readURL(input, selector) {
                if (input.files && input.files[0]) {
                    let reader = new FileReader();

                    reader.onload = function(e) {
                        $(selector).attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#cmt_truoc").change(function() {
                readURL(this, '#mat_truoc_preview');
            });

        });
    </script>
@endsection
@endsection
