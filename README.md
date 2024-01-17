

for data seeding via factory and seeder i have run below commands

neosoft@neosoft-Latitude-E7250:/var/www/html/laravel_interview$ php artisan make:seeder StudentsTableSeeder


neosoft@neosoft-Latitude-E7250:/var/www/html/laravel_interview$ php artisan make:factory StudentFactory
.

neosoft@neosoft-Latitude-E7250:/var/www/html/laravel_interview$ php artisan db:seed --class=StudentsTableSeeder

neosoft@neosoft-Latitude-E7250:/var/www/html/laravel_interview$ php artisan db:seed --class=StudentsTableSeeder