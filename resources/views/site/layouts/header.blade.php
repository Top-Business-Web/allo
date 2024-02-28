
<!-- Header Area -->

<div class="header-area">
    <div class="sticky-area">
        <div class="navigation">
            <div class="container-fluid">
                <div class="header-inner-box">
                    <div class="logo">
                        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset($setting->logo) }}" alt=""/></a>
                    </div>

                    <div class="main-menu accordion menu" id="accordionMenu">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler btn-menu" id="toggle-btn" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse justify-content-center"
                                 id="navbarSupportedContent">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item">
                                        @php
                                            $name_url = Request::segment(2);
                                        @endphp
                                        <a class="nav-link {{ $name_url == '' ? 'active' : '' }}" href="{{ route('home') }}">{{ trans('site.home') }}
                                            <span class="sub-nav-toggler"> </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ $name_url == 'about' ? 'active' : '' }}" href="{{ route('about') }}">{{ trans('site.about_us') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ $name_url == 'service' ? 'active' : '' }}" href="{{ route('service') }}">{{ trans('site.services') }}
                                            <span class="sub-nav-toggler"> </span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link {{ $name_url == 'projects' ? 'active' : '' }}" href="{{ route('projects') }}">{{ trans('site.projects') }}
                                            <!-- <span class="sub-nav-toggler"> </span> -->
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ $name_url == 'partner-success' ? 'active' : '' }}"
                                            href="{{ route('partnerSuccess') }}">{{ trans('site.partner_success') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ $name_url == 'careers' ? 'active' : '' }}" href="{{ route('careers') }}">{{ trans('site.career') }}</a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a class="nav-link {{ $name_url == 'blog' ? 'active' : '' }}" href="{{ route('blog') }}">{{ trans('site.news') }}</a>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a class="nav-link {{ $name_url == 'contact' ? 'active' : '' }}" href="{{ route('contact') }}">{{ trans('site.contact') }}</a>
                                    </li>
                                </ul>
                                <div class="lang-list">
                        <div class="dropdown">

                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a class="btn btn-sm dropdown-toggle" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            @endforeach

                        </div>
                    </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</div>
