<!DOCTYPE html>
<html lang="en">
@include('site.layouts.head')
<body>
<!-- Pre-Loader -->
<div class="preloader"></div>

@include('site.layouts.header')

@yield('content')

@include('site.layouts.footer')
<!-- Scroll Top Area -->
<a href="#top" class="go-top"><i class="fas fa-angle-up"></i></a>

<!-- font awesome JS -->
<script src="{{ asset('assets/front/') }}/assets/js/all.min.js"></script>

<!-- Popper JS -->
<script src="{{ asset('assets/front/') }}/assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('assets/front/') }}/assets/js/bootstrap.min.js"></script>
<!-- Wow JS -->
<script src="{{ asset('assets/front/') }}/assets/js/wow.min.js"></script>
<!-- Way Points JS -->
<script src="{{ asset('assets/front/') }}/assets/js/jquery.waypoints.min.js"></script>
<!-- Counter Up JS -->
<script src="{{ asset('assets/front/') }}/assets/js/jquery.counterup.min.js"></script>
<!-- Owl Carousel JS -->
<script src="{{ asset('assets/front/') }}/assets/js/owl.carousel.min.js"></script>
<!-- Magnific Popup JS -->
<script src="{{ asset('assets/front/') }}/assets/js/magnific-popup.min.js"></script>
<!-- Sticky JS -->
<script src="{{ asset('assets/front/') }}/assets/js/jquery.sticky.js"></script>
<!-- Nice Select JS -->
<script src="{{ asset('assets/front/') }}/assets/js/jquery.nice-select.min.js"></script>
<!-- Progress Bar JS -->
<script src="{{ asset('assets/front/') }}/assets/js/jquery.barfiller.js"></script>
<!-- Main JS -->
<script src="{{ asset('assets/front/') }}/assets/js/main.js"></script>
<!-- splide plugin -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

<!-- slick plugin -->
<script src="{{ asset('assets/front/') }}/assets/js/slick.min.js"></script>
<script src="{{ asset('assets/front/') }}/assets/js/plugin.js"></script>

@toastr_js
@toastr_render

<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

<script>
    $(document).ready(function () {
        $('.dropify').dropify();
    });
</script>



</body>
</html>
