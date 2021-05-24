<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>One Lapu-Lapu | City Government of Lapu-Lapu</title>
  <link rel="icon" href="{{ asset('img/llc-seal.png') }}" type="image/icon type">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="{{ asset('clientv2/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('clientv2/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{ asset('clientv2/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('clientv2/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('clientv2/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{ asset('clientv2/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset('clientv2/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('clientv2/assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        xfbml            : true,
        version          : 'v9.0'
      });
    };

    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  <!-- Your Chat Plugin code -->
  <div class="fb-customerchat" attribution="setup_tool" page_id="1890374944395333"></div>

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center" id="navbar">            
      @include('clientv2.layout.nav')
    </div>
  </header>
      @yield('content')
  @include('clientv2.layout.footer')

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <script src="{{ asset('clientv2/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('clientv2/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('clientv2/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('clientv2/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('clientv2/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('clientv2/assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('clientv2/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('clientv2/assets/vendor/aos/aos.js') }}"></script>



  <script src="{{ asset('clientv2/assets/js/main.js') }}"></script>
  <script src="{{ asset('clientv2/assets/js/nav.js') }}"></script>

</body>

</html>