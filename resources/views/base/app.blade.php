<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css" integrity="sha256-5veQuRbWaECuYxwap/IOE/DAwNxgm4ikX7nrgsqYp88=" crossorigin="anonymous">
    <title>Calendar</title>
</head>
<body>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js" integrity="sha256-YicH/8aE660iEnJtgll3vT54dJApy3XkYmqNfGVFEzA=" crossorigin="anonymous"></script>
    {{-- <script scr="{{ asset('js/app.js') }}"></script> --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          locale : 'fr', 
          timeZone : 'Europe/Paris',
          headerToolbar : {
              start : 'prev,next today',
              center : 'title',
              end : 'dayGridMonth,timeGridWeek' , 
          }
        });
        calendar.render();
      });
    </script>
</body>
</html>