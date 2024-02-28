@extends('site.layouts.master')
@section('content')

    <!-- Breadcroumb Area -->

    <div class="breadcroumb-area bread-bg" style="background-image: url('{{ asset($bgImages->career_img) }}')">
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title text-center">
                        <h1>{{ trans('site.join_us') }}</h1>
                        <h6><a href="{{ route('home') }}">{{ trans('site.home') }}</a> / {{ trans('site.join_us') }}
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
