<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>City of Lapu-Lapu | Official Website of City Government of Cebu | Admin Dashboard</title>

        {{-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> --}}
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        
        <link href="{{ asset('css/sb-admin/sb-admin.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/fontawesome-free/css/all.css') }}" rel="stylesheet">

        {{-- Slim Select --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.25.0/slimselect.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.25.0/slimselect.min.js"></script>

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

    </head>
    <body id="page-top">
        <div id="wrapper">
            @include('admin.layout.sidebar')
 
                <div id="content-wrapper" class="d-flex flex-column">
                    @include('admin.layout.nav')
                    <div id="content">
                       <div class="container-fluid">
                            @yield('content')
                       </div>
                        
                    </div>
                    @include('admin.layout.footer')
                </div>
          

        </div>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            new SlimSelect({
                select: '#barangay'
            });
        </script>
    </body>
</html>
