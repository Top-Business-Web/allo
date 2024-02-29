@extends('site.layouts.master')

@section('content')
<!-- Breadcroumb Area -->

<div class="breadcroumb-area bread-bg" style="background-image: url('{{ asset($bgImages->career_img) }}')">
    <div class="overlay-2"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcroumb-title text-center">
                    <h1>{{ trans('site.gallery') }}</h1>
                    <h6><a href="{{ route('home') }}">{{ trans('site.home') }}</a> / {{ trans('site.gallery') }}
                    </h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="project-area section-padding">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-7">
                <div class="section-title">
                    <h2>Tracktor Gallery</h2>
                </div>
            </div>
        </div>
        <div class="product">
            <div class="row">
                @foreach($galleries as $gallery)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="project-single ms-2 me-2">
                        <div class="project-img">
                            <img src="{{ asset($gallery->image) }}" alt="{{ $gallery->name }}">
                        </div>
                        <div class="project-content">
                            <h5 class="project-title text-center fs-5">
                            {{ $gallery->name }}
                            </h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
