@extends('site.layouts.master')

@section('content')

<!-- Preloader -->
<div class="preloader"></div>

<!-- Breadcroumb Area -->
<div class="breadcroumb-area bread-bg" style="background-image: url('{{ asset($bgImages->contact_img) }}')">
    <div class="overlay-2"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcroumb-title text-center">
                    <h1>{{ trans('site.contact') }}</h1>
                    <h6><a href="{{ route('home') }}">{{ trans('site.home') }}</a> / {{ trans('site.contact') }}</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Page Google Map Start -->
<div class="contact-page-google-map">
    <div class="container">
        <iframe src="{{ $setting->location_url }}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<!-- Contact Page Details Start -->
<section class="contact-page-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="section-title text-center">
                    <h6>{{ trans('site.contact_with_us') }}</h6>
                    <h2 class="section-title">{{ trans('site.drop_us_a_message') }}</h2>
                </div>
                <div class="contact-page_form">
                    <form class="contactForm" id="contactForm">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="{{ trans('site.name') }}" name="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="{{ trans('site.email') }}" name="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="{{ trans('site.phone') }}" name="phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="{{ trans('site.subject') }}" name="subject">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" name="message" placeholder="{{ trans('site.write_a_message') }}"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">{{ trans('site.send_a_message') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="contact-result"></div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="contact-page-details_right">
                    <ul class="list-unstyled contact-page-details_list">
                        <li>
                            <span>{{ trans('site.call_anytime') }}</span>
                            <p><a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a></p>
                        </li>
                        <li>
                            <span>{{ trans('site.send_email') }}</span>
                            <p><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></p>
                        </li>
                        <li>
                            <span>{{ trans('site.visit_office') }}</span>
                            <p>{{ app()->getLocale() == 'ar' ? $setting->address_ar : $setting->address_en }}</p>
                        </li>
                    </ul>
                    <div class="contact-page-details_social">
                        <a href="{{ $setting->twitter }}"><i class="fab fa-twitter"></i></a>
                        <a href="{{ $setting->facebook }}"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Page Details End -->

<script>
    $(document).ready(function() {
        $('#contactForm').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ route('contact.store') }}",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('#career-btn').html('Loading...');
                },
                success: function(data) {
                    if (data.status === 200) {
                        toastr.success('{{ trans('site.message_sent_successfully') }}');
                        $('#contactForm')[0].reset();
                        $('#career-btn').html('{{ trans('site.send_a_message') }}');
                    }
                },
                error: function(data) {
                    if (data.status === 422) {
                        var errors = $.parseJSON(data.responseText);
                        $.each(errors, function(key, value) {
                            toastr.error(value);
                        });
                    } else {
                        toastr.error('{{ trans('site.error_sending_message') }}');
                    }
                    $('#career-btn').html('{{ trans('site.send_a_message') }}');
                }
            });
        });
    });
</script>

@endsection
