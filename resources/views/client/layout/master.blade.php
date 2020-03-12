<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>City of Lapu-Lapu | Official Website of City Government of Cebu | Admin Dashboard</title>

        <!-- Custom fonts for this template-->
        {{-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> --}}
        <link href="https://fonts.googleapis.com/css?family=Lato:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        {{-- <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> --}}
        <!-- Custom styles for this template-->
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/client/footer.css') }}" rel="stylesheet">
        <link href="{{ asset('css/client/content.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/fontawesome-free/css/all.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

        {{-- Full Calendar --}}
        <link href='https://unpkg.com/@fullcalendar/core@4.3.1/main.min.css' rel='stylesheet' />


  

        <link href='https://unpkg.com/@fullcalendar/daygrid@4.3.0/main.min.css' rel='stylesheet' />
        <link href='https://unpkg.com/@fullcalendar/timegrid@4.3.0/main.min.css' rel='stylesheet' />
      
        {{-- <script src='/assets/demo-to-codepen.js'></script> --}}
        <script src='https://unpkg.com/@fullcalendar/core@4.3.1/main.min.js'></script>
        <script src='https://unpkg.com/@fullcalendar/interaction@4.3.0/main.min.js'></script>
        <script src='https://unpkg.com/@fullcalendar/daygrid@4.3.0/main.min.js'></script>
        <script src='https://unpkg.com/@fullcalendar/timegrid@4.3.0/main.min.js'></script>
    </head>
    <body id="page-top">
        <div id="wrapper">
          <div id="content-wrapper" class="d-flex flex-column">
            @include('client.layout.nav')
            @include('client.layout.menu')
            <div id="content" class="content">
                @yield('content')
            </div>
              @include('client.layout.footer')
          </div>
        </div>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        @stack('js')
      </body>
</html>
