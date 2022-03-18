<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


## Laravel Project : Google Calendar 

Ce projet Laravel consiste à utiliser les APIS de google calendar et les retrouver dans l'implémentation de fullcalendar que j'aurai établie. 

## Initialisation du projet laravel

J'utilise l'IDE Visual Studio Code et l'environnement de développement Laragon. 

## Welcome

La page d'index de ce projet et la page welcome, on y retrouve le calendrier. 
Route::get('/', [HomeController::class , 'index'])->name('home');
Elle se trouve dans la racine et c'est la méthode index dans le controller HomeController qui appelle la vue.
Si vous regardez le template welcome, il n'y a rien si ce n'est une div avec l'id : calendar. C'est ici que sera générer le calendrier via la méthode FullCalendar.Calendar de fullCalendar. On met en paramètre l'id calendar. 

