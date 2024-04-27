<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //User::factory()->create([//luce igual a tinker
        //    'name' => 'Test User',
        //    'email' => 'test@example.com',
        //]);

        $curso = new Curso();
        $curso->name = 'Laravel 1';
        $curso->description = 'El mejor framework de PHP';
        $curso->categoria = 'Desarrollo web';
        $curso->save();

        $curso2 = new Curso();
        $curso2->name = 'Laravel 2';
        $curso2->description = 'El mejor framework de PHP';
        $curso2->categoria = 'Desarrollo web';
        $curso2->save();

        $curso3 = new Curso();
        $curso3->name = 'Laravel 3';
        $curso3->description = 'El mejor framework de PHP';
        $curso3->categoria = 'Desarrollo web';
        $curso3->save();
    }
}
