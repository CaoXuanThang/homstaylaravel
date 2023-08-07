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
                                New
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="section sec-testimonials">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-md-6">
                    <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
                        Categories News
                    </h2>
                </div>
                <div class="col-md-6 text-md-end">
                    <div id="testimonial-nav">
                        <span class="prev" data-controls="prev">Prev</span>

                        <span class="next" data-controls="next">Next</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4"></div>
            </div>
            <div class="testimonial-slider-wrap">
                <div class="testimonial-slider">
                    @foreach ($new_category as $item)
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="box-feature">
                            <span class="flaticon-house"></span>
                            <h3 class="mb-3">{{$item->name}}</h3>
                            <p>
                                {{$item->description}}
                            </p>
                            
                        </div>
                    </div>
                    
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="section section-properties">
        <div class="container">
            <div class="row">
                
                @foreach ($new as $item)
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="property-item mb-30">
                            <a href="{{route('client.detail_new',$item->id)}}" class="img">
                                <img src="{{ $item->image ? '' . Storage::url($item->image) : '' }}" alt="Image" class="img-fluid" />
                            </a>
                            <div class="property-content">
                                
                                <div>
                                    <span class="city d-block mb-3">{{ $item->title }}</span>
                                    <span class="d-block mb-2 text-black-50">{{ $item->description }}</span>

                                    

                                    <a href="{{ route('client.detail_new', $item->id) }}" class="btn btn-primary py-2 px-3">See
                                        details</a>
                                </div>
                            </div>
                        </div>
                        <!-- .item -->
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    </div>
@endsection
