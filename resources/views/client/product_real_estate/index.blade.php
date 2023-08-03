@extends('client.layout')
@section('nav')
    <div class="hero page-inner overlay" style="background-image: url('{{ asset('asset/images/hero_bg_1.jpg') }}')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Properties</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">
                                Properties
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6 text-center mx-auto">
                    <h2 class="font-weight-bold text-primary heading">
                        Featured Properties
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
                                            <span class="d-block mb-2 text-black-50">{{ $item->address }}</span>
                                            <span class="city d-block mb-3">{{ $item->name }}</span>

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
    <div class="section section-properties">
        <div class="container">
            <div class="row">
                @foreach ($real_estate as $item)
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="property-item mb-30">
                            <a href="property-single.html" class="img">
                                <img src="{{ $item->image ? '' . Storage::url($item->image) : '' }}" alt="Image"
                                    class="img-fluid" style="width: 200px; height: 200px;" />
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

                                    <a href="{{ route('property', $item->id) }}" class="btn btn-primary py-2 px-3">See
                                        details</a>
                                </div>
                            </div>
                        </div>
                        <!-- .item -->
                    </div>
                @endforeach
            </div>
            <div class="row align-items-center py-5">

                {{ $real_estate->links('custom.pagination') }}
            </div>
        </div>
    </div>
    
@endsection
