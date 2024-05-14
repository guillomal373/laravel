# agregar carpeta idiomas

```php
php artisan lang:publish
```laravel

Para agregar español entonces agreguemos el paquete como LARAVEL LANG
web: https://laravel-lang.com/installation.html#recommended 

```php
composer require --dev laravel-lang/lang:^14.0

php artisan lang:add <language> // ejemplo: es, fr
```laravel

para usarlo hay q ir a config/app.php, buscamos locale y cambiamos a 'es'
