<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                DB::table('category')->insert([
            [
                'code' => 'Cul',
                'name' => 'Culinary',
                'description' => 'Culinary'
            ],
            [
                'code' => 'Fas',
                'name' => 'Fashion',
                'description' => 'Fashion'
            ],
            [
                'code' => 'Serv',
                'name' => 'Service',
                'description' => 'Service'
            ],
        ]);

    }
}
