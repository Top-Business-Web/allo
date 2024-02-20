@extends('site.layouts.master')

@section('content')
    <!-- Pre-Loader -->
    <div class="preloader"></div>


    <!-- Breadcroumb Area -->

    <div class="breadcroumb-area bread-bg" style="background-image: url('{{ asset($bgImages->about_img) }}')">
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title text-center">
                        <h1>{{ trans('site.about_us') }}</h1>
                        <h6><a href="{{ route('home') }}">{{ trans('site.home') }}</a> / {{ trans('site.about_us') }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- About Section  -->

    <div class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="about-content-wrap">
                        <div class="section-title">
                            <!-- <p>Complete Commercial And Residential Recycling Services!</p> -->
                            <h2>{{ app()->getLocale() == 'ar' ? $aboutUs->title_ar : $aboutUs->title_en }}</h2>
                        </div>
                        <div class="about-content">
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="about-content-left">
                                        <p class="highlight">{{ app()->getLocale() == 'ar' ? $aboutUs->desc_ar : $aboutUs->desc_en }}
                                        </p>

                                        {{--  <p>
                                            {{ trans('site.enviro_group_aims') }}
                                        </p>  --}}

                                        <!-- <button class="main-btn bg-brown mb-3" onclick="profDownload()">
                                            {{ trans('site.Profile_company') }}
                                        </button> -->
                                        <!-- <div class="row mt-20">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="featured-area">
                                                    <div class="featured-icon">
                                                        <i class="fas fa-business-time"></i>
                                                    </div>
                                                    <div class="featured-content">
                                                        <div class="featured-title">
                                                            <h5>{{ trans('site.ontime_at') }} <br>{{ trans('site.services') }}</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="featured-area">
                                                    <div class="featured-icon">
                                                        <i class="fas fa-stopwatch"></i>
                                                    </div>
                                                    <div class="featured-content">
                                                        <div class="featured-title">
                                                            <h5>24/7 <br>{{ trans('site.services') }}</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="featured-area">
                                                    <div class="featured-icon">
                                                        <i class="fas fa-money-check-alt"></i>
                                                    </div>
                                                    <div class="featured-content">
                                                        <div class="featured-title">
                                                            <h5>{{ trans('site.affordable') }} <br>{{ trans('site.cost') }}</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset($aboutUs->image) }}" alt="">
                        <div class="about-counter">
                            <div class="counter-icon">
                                <img src="{{ asset('assets/front') }}/assets/img/icon/customer-service.png" alt="" style="width: 60px;">
                            </div>
                            <div class="counter-number">
                                <span class="counting" data-counterup-nums="">{{ $aboutUs->happy_clients }}</span>
                            </div>
                            <h6>{{ trans('site.Happy_customers') }}</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Process Section  -->

    <div class="process-area dark-bg section-padding">
        <div class="container">
            <!-- <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="section-title">
                        <h6>{{ trans('site.recycling_wastage_save_environment') }}</h6>
                        <h2 class="text-white">{{ trans('site.simple_steps_wastage') }}</h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="process-right-content">
                        <p class="text-white">{{ trans('site.recycling_is_the_process_of_converting') }}</p>
                        <p class="text-white">{{ trans('site.this_waste_management_video') }}</p>
                        <div class="process-btn">
                            <a href="{{ route('contact') }}" class="main-btn">{{ trans('site.get_started') }}</a>

                            <button
                                                class="btn-certificate bg-brown mb-3 mt-5"
                                                onclick="profDownload('{{ asset($setting->profile) }}', 'profile Company')">QHSE Policy</button>

                            <a href="#" class="main-btn white"> ISO Certificate - Currently under certification 9001-2008</a>
                        </div>
                    </div>
                </div>
            </div> -->


            <div class="process-item-wrap">
                <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="process-single">
                        <div class="process-icon">
                            <img src="{{ asset('assets/front') }}/assets/img/icons-02.png" alt="" style="width: 60px;">
                        </div>
                        <div class="process-title">
                            <h5>{{ trans('site.our_vision') }}</h5>
                        </div>
                        <div class="process-desc">
                            <p style="text-align: justify;">
                                @lang('site.vision')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="process-single two">
                        <div class="process-icon">
                            <img src="{{ asset('assets/front') }}/assets/img/icons-03.png" alt="" style="width: 60px;">
                        </div>
                        <div class="process-title">
                            <h5>{{ trans('site.our_mission') }}</h5>
                        </div>
                        <div class="process-desc">
                            <p style="text-align: justify;">
                                @lang('site.mission')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="process-single three">
                        <div class="process-icon">
                            <img src="{{ asset('assets/front') }}/assets/img/icons-01.png" alt="" style="width: 60px;">
                        </div>
                        <div class="process-title">
                            <h5>{{ trans('site.our_values') }} </h5>
                        </div>
                        <div class="process-desc">
                            <p style="text-align: justify;">
                                @lang('site.values')
                            </p>
                        </div>
                        <!-- <div class="process-desc text-start"> -->

                        <!-- </div>                         -->
                    </div>
                </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Choose Us Area  -->

    <div class="why-choose-two section-padding pb-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="why-choose-two_left">
                        <div class="why-choose-two_img">
                            <img src="{{ asset($aboutUs->img) }}" alt="">
                            <div class="why-choose-two_video-link">
                                <a href="#" class="video-popup">
                                    <div class="why-choose-one_video-icon">
                                        <span class="las la-play"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="why-choose-two_right mb-5 pb-5">
                        <div class="section-title text-left">
                            <!-- <h6>{{ trans('site.our_pontential_benefits') }}</h6> -->
                            <h2>{{ app()->getLocale() == 'ar' ? $aboutUs->top_title_ar : $aboutUs->top_title_en }}</h2>
                        </div>
                        <p class="highlight">
                            {{ app()->getLocale() == 'ar' ? $aboutUs->top_desc_ar : $aboutUs->top_desc_en }}
                        </p>
                        {{--  <p class="why-choose-two_right-text">
                            {{ trans('site.in_2022_enviro_group_starts') }}
                        </p>  --}}
                        <!-- <ul class="list-unstyled why-choose-two_points">
                            <li>
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>{{ trans('site.comfort_pickup') }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>{{ trans('site.reducing_waste') }}</p>
                                </div>
                            </li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA -->
    <!-- <div class="cta-area-2 mt-100 dark-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <h2>{{ trans('site.lets_get_your_project') }} <b>{{ trans('site.started') }}</b> {{ trans('site.today') }}!</h2>
                </div>
                <div class="col-lg-6 offset-lg-1 col-12">
                    <div class="cta-btn-2 mt-20">
                        <a href="{{ route('quote') }}" class="main-btn">{{ trans('site.get_a_quote') }}</a>
                        <a href="{{ route('contact') }}" class="main-btn white">{{ trans('site.contact_with_us') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <script>
        function profDownload(){
          var link =  window.open('{{ asset($setting->profile) }}', '_blank');
        }
    </script>
@endsection


