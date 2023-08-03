@extends('client.layout')
@section('content')
@section('nav')
    <div class="hero">
        <div class="hero-slide">
            @foreach ($marketing_banner as $item)
                <div class="img overlay"
                    style="background-image: url('{{ $item->image ? Storage::url($item->image) : '' }}')"></div>
            @endforeach
            {{-- <div class="img overlay" style="background-image: url('{{asset('asset/images/hero_bg_2.jpg')}}')"></div>
        <div class="img overlay" style="background-image: url('{{asset('asset/images/hero_bg_1.jpg')}}')"></div> --}}
        </div>

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center">
                    <h1 class="heading" data-aos="fade-up">
                        Easiest way to find your dream home
                    </h1>
                    <form action="{{route('search')}}" method="GET" class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up"
                        data-aos-delay="200">
                        @csrf
                        <input type="text" class="form-control px-4" placeholder="Your ZIP code or City. e.g. New York"
                            name="query" />
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection
    <div class="section section-properties">
        <div class="container">
            <div class="row">
                @foreach ($search as $item)
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="property-item mb-30">
                            <a href="property-single.html" class="img">
                                <img src="{{ $item->image ? '' . Storage::url($item->image) : '' }}" alt="Image"
                                    class="img-fluid" style="width: 200px; height: 200px;" />
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

                                    <a href="{{ route('property', $item->id) }}" class="btn btn-primary py-2 px-3">See
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
@endsection
