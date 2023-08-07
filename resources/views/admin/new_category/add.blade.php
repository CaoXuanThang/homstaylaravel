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
                    <a href="{{ route('new_category.list') }}" class="nav-item nav-link active"><i class="fa-solid fa-plus me-2" style="color: #1f5137;"></i> NewCategory</a>
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
                <h6 class="mb-4">Thêm Danh Mục Tin Tức</h6>
                <form action="{{ route('new_category.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" >
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-sm-4 control-label">Ảnh</label>
                        <div class="col-md-9 col-sm-8">
                            <div class="row">
                                <div class="col-xs-6">
                                    <img id="mat_truoc_preview"
                                        src="https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg"
                                        alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid" />
                                    <input type="file" name="image" accept="image/*"
                                        class="form-control-file @error('image') is-invalid @enderror" id="cmt_truoc">
                                    <label for="cmt_truoc">Mặt trước</label><br />
                                </div>
                            </div>
                        </div>
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
@section('script')
<script>
    $(function () {
        function readURL(input, selector) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();

                reader.onload = function (e) {
                    $(selector).attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#cmt_truoc").change(function () {
            readURL(this, '#mat_truoc_preview');
        });

    });
</script>
@endsection
@endsection