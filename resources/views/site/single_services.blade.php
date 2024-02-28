@extends('site.layouts.master')

@section('content')

    <!-- Breadcroumb Area -->

    <div class="breadcroumb-area plastic-bg" style="background-image: url('{{ asset($bgImages->service_img) }}')">
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title text-center">
                        <h1>{{ app()->getLocale() == 'ar' ? $data['single_service']->title_ar : $data['single_service']->title_en }}</h1>
                        <h6><a href="{{ route('home') }}">{{ trans('site.home') }}</a>
                            / {{ app()->getLocale() == 'ar' ? $data['single_service']->title_ar : $data['single_service']->title_en }}
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Service Details Start-->
    <section class="service-details pb-50">
        <div class="container">
            <div class="row gx-5">
                <div class="col-xl-4 col-lg-5">
                    <div class="service-details_sidebar">
                        <div class="service-details_sidebar-service">
                            <ul class="service-details_sidebar-service-list list-unstyled">
                                @foreach ($data['services'] as $service)
                                    <li class="d-block {{ $service->id == $data['single_service']['id'] ? 'current' : '' }}">
                                        <a
                                            href="{{ route('singleService', $service->id) }}">{{ app()->getLocale() == 'ar' ? $service->title_ar : $service->title_en }}
                                            <span> <i
                                                    class="fas fa-long-arrow-alt-right"></i></span></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="service-details_need-help">
                            <div class="service-details_need-help-bg">
                            </div>
                            <h2 class="service-details_need-help-title">{{ trans('site.contact_with_us_for_any_advice') }}</h2>
                            <div class="service-details_need-help-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="service-details_need-help-contact">
                                <p>{{ trans('site.call_anytime') }}</p>
                                <a href="{{ $setting->phone }}">{{ $setting->phone }}</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="service-details_right">
                        <div class="service-details_content">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3 class="service-details_title">{{ app()->getLocale() == 'ar' ? $data['single_service']->title_ar : $data['single_service']->title_en }}</h3>
                                </div>
                                <div>
                                    <button class="main-btn" onclick="window.open('{{ asset($data['single_service']->file) }}')">
                                            {{ trans('site.Profile_company') }}
                                    </button>
                                </div>
                            </div>
                            @if($data['single_service']->id == 15)
                                <div class="mb-4">
                                    <a class="main-btn"
                                       href="{{ route('galleryIndex') }}">{{ trans('site.tracktor_gallery') }}</a>
                                </div>
                            @endif
                            <p class="service-details_text-1 mb-5">{{ app()->getLocale() == 'ar' ? $data['single_service']->desc_ar : $data['single_service']->desc_en }} </p>
                        </div>

                        <section id="main-carousel" class="splide" aria-label="My Awesome Gallery">
                            <div class="splide__track" style="height:500px !important;">
                                <ul class="splide__list">
                                    @foreach($data['single_service']->images as $image)
                                        <li class="splide__slide">
                                            <img src="{{ asset($image) }}" alt="no-image"
                                                 style="height:500px !important;">
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </section>


                        <ul id="thumbnails" class="thumbnails">
                            @foreach($data['single_service']->images as $image)
                                <li class="thumbnail">
                                    <img src="{{ asset($image) }}" alt="">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Service Details End-->

    <script>

        var splide = new Splide('#main-carousel', {
            pagination: false,
        });


        var thumbnails = document.getElementsByClassName('thumbnail');
        var current;


        for (var i = 0; i < thumbnails.length; i++) {
            initThumbnail(thumbnails[i], i);
        }


        function initThumbnail(thumbnail, index) {
            thumbnail.addEventListener('click', function () {
                splide.go(index);
            });
        }


        splide.on('mounted move', function () {
            var thumbnail = thumbnails[splide.index];


            if (thumbnail) {
                if (current) {
                    current.classList.remove('is-active');
                }


                thumbnail.classList.add('is-active');
                current = thumbnail;
            }
        });


        splide.mount();
    </script>

@endsection


