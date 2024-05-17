<p align="center">
    <a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a>
    <a href="https://jetstream.laravel.com/introduction.html" target="_blank"><img src="https://jetstream.laravel.com/logo-dark.svg" width="400" alt="JetStream Logo"></a>
    <a href="https://www.microsoft.com/en-us/sql-server/sql-server-2022" target="_blank"><img src="https://www.svgrepo.com/show/303229/microsoft-sql-server-logo.svg" width="150" alt="SqlServer Logo"></a>
    <a href="https://laravel-livewire.com/" target="_blank"><img src="https://picperf.io/https://laravelnews.s3.amazonaws.com/images/laravel-livewire.png" width="150" alt="Livewire Logo"></a>
</p>

## Creando el proyecto

1. Laravel
2. JetStream
3. Livewire
4. SQLServer

- [Youtube](https://www.youtube.com/watch?v=9XXoBYh9HF8&ab_channel=Eduardo)
- [Sql Driver for php](https://learn.microsoft.com/en-us/sql/connect/php/download-drivers-php-sql-server?view=sql-server-ver16)

1. Al descargar el ZIP con los drivers de SQLSERVER para PHP, buscamos con phpinfo la versión actual de nuestro PHP y luego sacamos los archivos del ZIP y los pegamos en la ruta: "C:\xampp\php\ext"
2. Luego vamos a configurar las extensiones en el archivo "php.ini" en "Module Settings", se agrega las líneas: 

```php.ini
;;;;;;;;;;;;;;;;;;;
; Module Settings ;
;;;;;;;;;;;;;;;;;;;
...
extension=php_pdo_sqlsrv_82_ts_x64.dll
extension=php_sqlsrv_82_ts_x64.dll
```

3. vamos al proyecto en el archivo ".env" configuramos las cadenas de conexión

```cmd
ipconfig -> IPv4: 192.168.1.8
```

```.env
DB_CONNECTION=sqlsrv
DB_HOST=192.168.1.8
DB_PORT=1433
DB_DATABASE=ais
DB_USERNAME=******_2024
DB_PASSWORD='******_2024'
```

## Pasos

```console
laravel new <nombre_proyecto>
- JetStream
- Livewire
- Dark mode
- PHPUnit
- SQLServer
```

# Error - Microsoft ODBC Driver 17 for SQL Server TCP Provider

[url](https://es.stackoverflow.com/questions/272535/error-odbc-driver-17-for-sql-server-en-conexion-de-sql-server-con-laravel)

Sql Server Configuration Manager -> Sql Server Network Configuration -> Protocols For -> TCP/IP ->

I changed the following

IpAll
TCP Dynamic Ports 49226
TCP Port
To:

IpAll
TCP Dynamic Ports
TCP Port          1433
