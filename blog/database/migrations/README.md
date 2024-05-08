## commands

0. elimina todas las tablas

```
php artisan migrate:reset 
```

1. migrate all tables inside database/migrations

```
php artisan migrate
```

2. rollback from latest batch inside migrate table

```
php artisan migrate:rollback 
```

3. se crea un archivo en migrate vacío con la estructura básica

```
php artisan make:migration cursos
```

4. Create_XXX_table crea un archivo en migration pero tiene id y timestamps

```
php artisan make:migration create_cursos_table  
```
If you want to add column to a table

5.1. Recorrer una a una las migraciones ya realizadas ejecutando el método down y luego ejecuta todas con el método up

```
php artisan migrate:fresh
```
But if you are already in production environment

5.2. ejecuta el método DOWN y hace otra vez up de todas las tablas

```
php artisan migrate:refresh
```
Si queremos conservar los datos

5.3. Add one column to a table without destroying the datait also creates another file inside migrations folder with this command add_<column>_to_<table_name>_table

```
php artisan make:migration add_avatar_to_users_table
```
If i want to modify the type of a column like varchar(255) to varchar (100)

6. First require doctrine/dbal

```
Composer require doctrine/dbal
```

7. verificar este archivo donde se modifican los tipos y nullable de columnas

```
php artisan make:migration cambiar_propiedades_to_users_table 
```

## Eloquent - CRUD (ORM LARAVEL) -> https://laravel.com/docs/11.x/eloquent

1. Crear un modelo -> php artisan make:model Curso
Ejemplos:

- TABLE:cursos    MODELO:curso
- TABLE:profesores MODELO:profesor

2. Tinker -> https://laravel.com/docs/11.x/artisan#tinker

- php artisan tinker //adminitrar orm desde consola, nos salimos con "exit"

3. Seeders en laravel
4. database/seeders -> php artisan db:seed  //lena los registros dentro de seeder, pero solo le hace seed al archivo DatabaseSeeder.php

# Separando por tabla los seeders

php artisan make:seeder CursoSeeder
php artisan migrate:fresh --seed o php artisan migrate --seed// ejecuta fresh o migrate y luego el seed

# Factory para grandes cantidades de datos como seed, con una sola linea se crea n50 registros

php artisan make:factory CursoFactory 
php artisan make:factory CursoFactory --model=Curso 

C:\xampp\htdocs\laravel\blog\database\factories\CursoFactory.php
C:\xampp\htdocs\laravel\blog\database\seeders\CursoSeeder.php

## Consultas- eloquent

- Tinker
```
$cursos = App\Models\Curso::all(); // devuelve todos los cursos
$curso = Curso::where('categoria', 'Diseño web')->orderBy('name', 'asc')->first(); //devuelve el registro más reciente
$cursos = Curso::select('name','descripcion')->get(); //devuelve colección/ARRAY con solo name y descripcipn
$cursos = Curso::select('name','descripcion')->->orderBy('name as title', 'asc')->get(); //devuelve colección con solo name con alias title y descripcion ordenado de manera ascendente
$curso = Curso::where('name', 'Necesitabas ')->get();//devuelve un ARRAY curso donde el name es 'Necesitabas ' 
$curso = Curso::find(5); //devuelve el item con id = 5 
$curso = Curso::where('id','<=','5')->get(); //devuelve el array de cursos con id <= a 5
$curso = Curso::where('name','like','%bla%')->get(); //devuelve el array de cursos con name que contenga la palabra bla, adelante o atrás
```

## Mutadores - eloquent

- En user Models -> return set:function($value) ucwords(strtolower($value)); //para que se guarde todo Uppercase y Lowercase
- El get muestra de forma diferente pero no modifica en la base de datos
- Funciones flecha -> fn