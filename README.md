>1. git clone <https://github.com/id-0x56/app_laravel.git>
>2. create mysql DB "laravel" & edit ".env"
>3. php artisan migrate  

<https://example-site.com/> - click counter  
<https://example-site.com/dashboard> - coordinates chart  

Тело сайта должно находится в теге `<click-component></click-component>` (выделил зеленым, для наглядности)  
Не стал выносить, админку в другое приложение, так как по сути это было бы тоже самое приложение только с DashboardController (если это принципиально, вынесу)  
Все дебаг моменты оставил для наглядности, так будет видно где, что и как я монитороил  
Есть недоделки в плане распределения активности по дням/часам, доработаю  
