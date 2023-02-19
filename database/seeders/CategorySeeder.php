<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id'=>1,
            'name' => 'Processor',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'id'=>2,
            'name' => 'Motherboard',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('categories')->insert([
            'id'=>3,
            'name' => 'Memory',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('categories')->insert([
            'id'=>4,
            'name' => 'VGA Card',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'id'=>5,
            'name' => 'Storage',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'id'=>6,
            'name' => 'PSU',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'id'=>7,
            'name' => 'Monitor',
            'created_at' => now(),
            'updated_at' => now()
        ]); 

        DB::table('categories')->insert([
            'id'=>8,
            'name' => 'Mouse & Keyboard',
            'created_at' => now(),
            'updated_at' => now()
        ]); 
    }
}
