## commands

1. php artisan migrate //migrate all tables inside database/migrations
2. php artisan migrate:rollback //rollback from latest batch inside migrate table
3. php artisan make:migration cursos //se crea un archivo en migrate vacío con la estructura básica
4. php artisan make:migration create_cursos_table  // create_XXX_table crea un archivo en migration pero tiene id y timestamps
If you want to add column to a table
5.1. php artisan migrate:fresh //Recorrer una a una las migraciones ya realizadas ejecutando el método down y luego ejecuta todas con el método up
But if you are already in production environment
5.2.