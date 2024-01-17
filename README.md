

for data seeding via factory and seeder i have run below commands

ram@ram-Latitude-E7250:/var/www/html/laravel_interview$ php artisan make:seeder StudentsTableSeeder


ram@ram-Latitude-E7250:/var/www/html/laravel_interview$ php artisan make:factory StudentFactory
.

ram@ram-Latitude-E7250:/var/www/html/laravel_interview$ php artisan db:seed --class=StudentsTableSeeder

ram@ram-Latitude-E7250:/var/www/html/laravel_interview$ php artisan db:seed --class=StudentsTableSeeder