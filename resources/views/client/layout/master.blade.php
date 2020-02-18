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
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

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
      
        <script src='/assets/demo-to-codepen.js'></script>
        <script src='https://unpkg.com/@fullcalendar/core@4.3.1/main.min.js'></script>
        <script src='https://unpkg.com/@fullcalendar/interaction@4.3.0/main.min.js'></script>
        <script src='https://unpkg.com/@fullcalendar/daygrid@4.3.0/main.min.js'></script>
        <script src='https://unpkg.com/@fullcalendar/timegrid@4.3.0/main.min.js'></script>
        <script>

            document.addEventListener('DOMContentLoaded', function() {
              var calendarEl = document.getElementById('calendar');
          
              var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
                defaultView: 'dayGridMonth',
                defaultDate: '2020-02-07',
                header: {
                  left: 'prev,next today',
                  center: 'title',
                  right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                events: [
                  {
                    title: 'All Day Event',
                    start: '2020-02-01'
                  },
                  {
                    title: 'Long Event',
                    start: '2020-02-07',
                    end: '2020-02-10'
                  },
                  {
                    groupId: '999',
                    title: 'Repeating Event',
                    start: '2020-02-09T16:00:00'
                  },
                  {
                    groupId: '999',
                    title: 'Repeating Event',
                    start: '2020-02-16T16:00:00'
                  },
                  {
                    title: 'Conference',
                    start: '2020-02-11',
                    end: '2020-02-13'
                  },
                  {
                    title: 'Meeting',
                    start: '2020-02-12T10:30:00',
                    end: '2020-02-12T12:30:00'
                  },
                  {
                    title: 'Lunch',
                    start: '2020-02-12T12:00:00'
                  },
                  {
                    title: 'Meeting',
                    start: '2020-02-12T14:30:00'
                  },
                  {
                    title: 'Birthday Party',
                    start: '2020-02-13T07:00:00'
                  },
                  {
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: '2020-02-28'
                  }
                ]
              });
          
              calendar.render();
            });
          
          </script>
          
    </head>
    <body id="page-top">
        <div id="wrapper">
                <div id="content-wrapper" class="d-flex flex-column">
                    @include('client.layout.nav')
                    <div id="content">
                       <div class="container-fluid">
                            @yield('content')
                       </div>
                    </div>
                    @include('client.layout.footer')
                </div>
          

        </div>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    </body>
</html>
