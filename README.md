habr-url-laravel4
=================

Simple project for automatic generating of friendly urls with increment

Clone repo ``` git clone git@github.com:andrewdacenko/habr-url-laravel4.git project_folder ```

Install vendors with composer ``` cd project_folder && composer install ``` 

Create DB and configure connection in ``` app/config/database.php ```

Run migrations and seeds ``` php artisan migrate --seed ```

Run server ``` php artisan serve ```

That's it! 

* All available routes can be found at ``` php artisan routes ```

Russian article of full tutorial can be found at [Habrahabr.ru](http://habrahabr.ru/post/208678/)