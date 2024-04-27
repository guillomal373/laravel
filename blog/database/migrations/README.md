## commands

0. php artisan migrate:reset //elimina todas las tablas
1. php artisan migrate //migrate all tables inside database/migrations
2. php artisan migrate:rollback //rollback from latest batch inside migrate table
3. php artisan make:migration cursos //se crea un archivo en migrate vacío con la estructura básica
4. php artisan make:migration create_cursos_table  // create_XXX_table crea un archivo en migration pero tiene id y timestamps
If you want to add column to a table
5.1.Php artisan migrate:fresh //Recorrer una a una las migraciones ya realizadas ejecutando el método down y luego ejecuta todas con el método up
But if you are already in production environment
5.2.Php artisan migrate:refresh //ejecuta el método DOWN y hace otra vez up de todas las tablas
Si queremos conservar los datos
5.3 Php artisan make:migration add_avatar_to_users_table //Add one column to a table without destroying the datait also creates another file inside migrations folder with this command add_<column>_to_<table_name>_table
If i want to modify the type of a column like varchar(255) to varchar (100)
6. Composer require doctrine/dbal //First require doctrine/dbal
7. Php artisan make:migration cambiar_propiedades_to_users_table //verificar este archivo donde se modifican los tipos y nullable de columnas

## Eloquent - CRUD (ORM LARAVEL) -> https://laravel.com/docs/11.x/eloquent

1. Crear un modelo -> php artisan make:model Curso
Ejemplos:

- TABLE:cursos    MODELO:curso
- TABLE:profesores MODELO:profesor

2. Tinker -> https://laravel.com/docs/11.x/artisan#tinker

- php artisan tinker //adminitrar orm desde consola, nos salimos con "exit"

3. Seeders en laravel 
4. database/seeders -> php artisan db:seed  //lena los registros dentro de seeder