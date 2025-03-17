<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class featureSeeder extends Seeder
{
    public function run()
    {
        DB::table('features')->insert([
            ['id' => 1, 'name' => 'Model', 'description' => 'What is inside the table'],
            ['id' => 2, 'name' => 'View', 'description' => 'what the end users see.'],
            ['id' => 3, 'name' => 'Controller', 'description' => 'They handle the incoming HTTP requests and provide the necessary responses.'],
            ['id' => 4, 'name' => 'Routes', 'description' => 'defines and directs urls'],
            ['id' => 5, 'name' => 'Middleware', 'description' => 'inspecting and filtering HTTP requests'],
            ['id' => 6, 'name' => 'Blade Templates', 'description' => 'templating engine for ease of use'],
            ['id' => 7, 'name' => 'Migrations', 'description' => 'database creation'],
            ['id' => 8, 'name' => 'Seeder', 'description' => 'storing data in databases'],
            ['id' => 9, 'name' => 'Database', 'description' => 'holds the data'],
            ['id' => 10, 'name' => 'Eloquent ORM', 'description' => 'interacting data using object-oriented methods'],
        ]);
    }
}
