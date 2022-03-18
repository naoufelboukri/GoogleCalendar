<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css" integrity="sha256-5veQuRbWaECuYxwap/IOE/DAwNxgm4ikX7nrgsqYp88=" crossorigin="anonymous">
    <title>Calendar</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">

</head>
<body>
    @include('partials.navbar')

    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js" integrity="sha256-YicH/8aE660iEnJtgll3vT54dJApy3XkYmqNfGVFEzA=" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    {{-- <script scr="{{ asset('js/app.js') }}"></script> --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');



        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          locale : 'fr', 
          timeZone : 'Europe/Paris',
          googleCalendarApiKey : 'AIzaSyB6UccCzB6aRFZbjqdrZpRwF93gHFER3B8',
          eventSources:[
            {
                // Get the json output data from this path 
              url : '/source',
              backgroundColor : 'yellow',
              textColor: 'black',
              editable : true , 
              eventResizableFromStart : true              
            }, 
            {
              // Get my personal informations and synchronize them
              googleCalendarId: 'naoufelboukri@gmail.com', 
              color : 'green', 
            }
          ] ,
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