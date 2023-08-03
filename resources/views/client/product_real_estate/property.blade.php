@extends('client.layout')
@section('content')
@section('nav')
    <div class="hero page-inner overlay" style="background-image: url('{{asset('asset/images/hero_bg_3.jpg')}}')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">
                        {{ $property->name }}
                    </h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item">
                                <a href="properties.html">Product</a>
                            </li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">
                                {{ $property->name }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection


<div class="section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7">
                <div class="img-property-slide-wrap">
                    <div class="img-property-slide">
                        <img src="{{asset('asset/images/img_1.jpg')}}" alt="Image" class="img-fluid" />
                        <img src="{{asset('asset/images/img_2.jpg')}}" alt="Image" class="img-fluid" />
                        <img src="{{asset('asset/images/img_3.jpg')}}" alt="Image" class="img-fluid" />
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h2 class="heading text-primary">{{ $property->name }}</h2>
                <p class="meta">{{ $property->address }}</p>
                <p class="text-black-50">
                    {{$property->description}}
                </p>
               

                <div class="d-block agent-box p-5">
                    <div class="img mb-4">
                        <img src="{{$property->designer->image ? Storage::url($property->designer->image) : ''}}" alt="Image" class="img-fluid" />
                    </div>
                    <div class="text">
                        <h3 class="mb-0">{{$property->designer->name}}</h3>
                        <div class="meta mb-3">{{$property->designer->phone}}</div>
                        <p>
                            {{$property->designer->description}}
                        </p>
                        <ul class="list-unstyled social dark-hover d-flex">
                            <li class="me-1">
                                <a href="{{$property->designer->instagram}}"><span class="icon-instagram"></span></a>
                            </li>
                            <li class="me-1">
                                <a href="{{$property->designer->twitter}}"><span class="icon-twitter"></span></a>
                            </li>
                            <li class="me-1">
                                <a href="{{$property->designer->facebook}}"><span class="icon-facebook"></span></a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-lg-6 text-center mx-auto">
                <h2 class="font-weight-bold text-primary heading">
                    Sản Phẩm tương tự
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="property-slider-wrap">
                    <div class="property-slider">
                        {{-- dd($real_estate); --}}
                        @foreach ($real_estate_slide as $item)
                            <div class="property-item">
                                <a href="property-single.html" class="img">
                                    <img src="{{ $item->image ? '' . Storage::url($item->image) : '' }}" alt="Image"
                                        class="img-thumbnail" style="width: 200px; height: 200px;" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>{{ $item->price }}</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">{{ $item->name }}</span>
                                        <span class="city d-block mb-3">{{ $item->address }}</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">{{ $item->beds }} beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">{{ $item->baths }} baths</span>
                                            </span>
                                        </div>

                                        <a href="{{ route('property', $item->id) }}"
                                            class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
                        <span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
                        <span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
