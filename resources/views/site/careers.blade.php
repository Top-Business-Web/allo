@extends('site.layouts.master')
@section('content')
    <?php
    $length = 100; // Set the desired length of the random string
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%';
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }

    ?>
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

    <!-- Blog Section-->
    <div class="blog-area section-padding">
        <div class="container">
            <div class="row">
                @foreach ($jobs as $job)
                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay=".2s">
                        <div class="single-blog-item">
                            <div class="blog-bg">
                                <img src="{{ asset($job->image) }}" alt="">
                                @php
                                    $created_at = $job->created_at;
                                    $month_name = date("F", strtotime($created_at));
                                @endphp
                                <span class="blog-date">{{ $job->created_at->format('m') }} {{ $month_name }}</span>
                            </div>
                            <div class="blog-content">
                                <h5>
                                    <a href="{{ route('career',['job_id'=>$job->id,$randomString]) }}">{{ app()->getLocale() == 'ar' ? $job->title_ar : $job->title_en }}</a>
                                </h5>
                                <p>{{ app()->getLocale() == 'ar' ? $job->description_ar : $job->description_en }}</p>

                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection

