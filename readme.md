#  Installation
-  Clone this project - git clone https://github.com/gigsons/opr-laravel
- Create a database locally named oprextra_db 
- Download composer https://getcomposer.org/download/
- Edit .env file to match your database credentials
- Open the console and cd your project root directory
- Run `composer install` or ```php composer.phar install```
- Run `php artisan key:generate` 
- Run `php artisan migrate` - This creates tables for you
- Run `php artisan db:seed` to run seeders(populate your database with predefined dummy data), if any.
- Run `php artisan serve`

#####You can now access your project at localhost:8000 :)

## If for some reason your project stop working do these:
- `composer install`
- `php artisan migrate`
## If you make changes to your credentials(.env) please run
- `php artisan clear:config`
- `php artisan serve`
