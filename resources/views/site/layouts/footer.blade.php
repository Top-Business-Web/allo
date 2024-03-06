<!-- Footer Area -->

<footer class="footer-area">
    <div class="container">
        <div class="footer-up">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="logo">
                        <img src="{{ asset('assets/front') }}/assets/img/white png logo.png" alt="no-logo"/>
                    </div>
                    <div class="contact-info">
                        <p><b>{{ trans('site.location') }}
                                :</b> {{ app()->getLocale() == 'ar' ? $setting->address_ar : $setting->address_en }}</p>
                        <p><b>{{ trans('site.phone') }}:</b> {{ $setting->phone }}</p>
                        <p><b>{{ trans('site.email') }}:</b> {{ $setting->email }}</p>
                        <p><b>{{ trans('site.opening_hour') }}:</b> {{ $setting->open }}</p>
                    </div>

                </div>
                <div class="col-lg-2 col-md-6 com-sm-12">
                    <h6>@lang('site.branch_one')</h6>
                    <div class="contact-info">
                        <p><b>{{ trans('site.location') }}
                                : </b>@lang('site.branch1')</p>
                        <p><b>{{ trans('site.phone') }}:</b>0044 7378 813 780</p>
                        <p><b>{{ trans('site.email') }}:</b> info@igcogroup.com</p>
                        <!-- <p><b>{{ trans('site.opening_hour') }}:</b> {{ $setting->open }}</p> -->
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 com-sm-12">
                    <h6>@lang('site.branch_second')</h6>
                    <div class="contact-info">
                        <p><b>{{ trans('site.location') }}
                                :</b> @lang('site.branch2')</p>
                        <p><b>{{ trans('site.phone') }}:</b>0027 823 736 897</p>
                        <p><b>{{ trans('site.email') }}:</b> info@igcogroup.com</p>
                        <!-- <p><b>{{ trans('site.opening_hour') }}:</b> {{ $setting->open }}</p> -->
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                <h6>@lang('site.branch_third')</h6>
                    <div class="contact-info">
                        <p><b>{{ trans('site.location') }}
                                :</b> @lang('site.branch3')</p>
                        <p><b>{{ trans('site.phone') }}:</b>00965-23934047</p>
                        <p><b>{{ trans('site.email') }}:</b> info@igcogroup.com</p>
                        <!-- <p><b>{{ trans('site.opening_hour') }}:</b> {{ $setting->open }}</p> -->
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                <div class="subscribe-form">
                        <h6>{{ trans('site.news_letter') }}</h6>
                        <form class="newsForm" id="newsForm">
                            @csrf
                            <input type="email" placeholder="{{ trans('site.email') }}" name="email"/>
                            <button class="submitBtn" type="button" id="news-btn"><i
                                    class="fas fa-envelope submitIcon"></i></button>
                        </form>
                        <p>{{ trans('site.Stay_tuned_for_our_latest_news') }}</p>
                        <div class="">
                        <div class="header-btn">
                            <a href="{{ route('quote') }}" class="main-btn primary">{{ trans('site.get_a_quote') }}</a>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('admin.login') }}" class="main-btn">
                                {{ trans('site.dashboard') }}
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Footer Bottom Area  -->

<div class="footer-bottom">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-12">
                <div class="copyright-area">
                    <p class="copyright-line">© {{ date('Y') }} <a href="https://allo.topbusiness.io/en/contact">IGCO</a> All rights reserved.</p>
                </div>
            </div>

            <div class="col-lg-6 col-12 text-end">
                <div class="social-area">
                    <a href="{{ $setting->facebook }}" target="_blank"><i class="fab fa-facebook-f ms-2 me-2"></i></a>
                    <!-- <a href="{{ $setting->youtube }}"><i class="fab fa-youtube ms-2 me-2"></i></a> -->
                    <a href="{{ $setting->twitter }}" target="_blank"><i class="fab fa-twitter ms-2 me-2"></i></a>
                    <a href="{{ $setting->instagram }}" target="_blank"><i class="fab fa-instagram ms-2 me-2"></i></a>
                    <a href="{{ $setting->linkedin }}" target="_blank"><i class="fab fa-linkedin ms-2 me-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#news-btn').on('click', function (e) {
        e.preventDefault();
        var formData = new FormData(document.getElementById("newsForm"));
        $.ajax({
            'method': 'post',
            'type': 'POST',
            'data': formData,
            '_token': "{{ csrf_token() }}",
            'url': "{{ route('news.store') }}",
            success: function (data) {
                if (data.status === 200) {
                    toastr.success('message send success');
                    $('#contactForm input').val('');
                    $('.load-contact').html('');
                }
            },
            error: function (data) {
                if (data.status === 500) {
                    toastr.error('error sending message !!');
                } else if (data.status === 422) {
                    var errors = $.parseJSON(data.responseText);
                    $.each(errors, function (key, value) {
                        // alert(value);
                        if ($.isPlainObject(value)) {
                            $.each(value, function (key, value) {
                                toastr.error('' + value);
                                // alert(value);
                            });
                        }
                    });
                    $('.load-contact').html('error');
                }
            }
            ,
            cache: false,
            processData: false,
            contentType: false
        })
    })
</script>
