<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8" />
  <title>Blogge | Personal Blog Site</title>

  <!--Meta For No Index-->
  <meta name="robots" content="noindex, Nofollow, Noimageindex">

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <!-- Theme Stylesheet -->
  <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" />

  <!--Favicon-->
  <link rel="shortcut icon" href="{{asset('frontend/images/favicon.svg')}}" type="image/x-icon" />
  <link rel="icon" href="{{asset('frontend/images/favicon.svg')}}" type="image/x-icon" />
</head>

<body>

<!-- Navbar Start -->
@include('layouts.components-frontend.nav')
<!-- Navbar End -->

<div class="container-fuild">
    @yield('content')
</div>

{{-- footer --}}
@include('layouts.components-frontend.footer')
{{-- endfooter --}}

<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9rV6yesIygoVKTD6QLf_iCa9eiIIHqZ0&libraries=geometry">
</script>
<!-- Vendor JS -->
<script src="{{asset('frontend/vendor/jQuery/jquery.min.js')}}"></script>
<script src="{{asset('frontend/vendor/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/vendor/slick/slick.min.js')}}"></script>
<script src="{{asset('frontend/vendor/g-map/gmap.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('frontend/js/script.js')}}"></script>
</body>

</html>
