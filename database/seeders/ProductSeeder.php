<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Intel Core i3',
            'category_id' => '1',
            'price' => 1500000,
            'qty'=>100,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Intel Core i5',
            'category_id' => '1',
            'price' => 2300000,
            'qty'=>80,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'AMD Ryzen 3',
            'category_id' => '1',
            'price' => 1200000,
            'qty'=>50,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'AMD Ryzen 5',
            'category_id' => '1',
            'price' => 2000000,
            'qty'=>50,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Asus Motherboard',
            'category_id' => '2',
            'price' => 990000,
            'qty'=>10,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Gigabyte Motherboard',
            'category_id' => '2',
            'price' => 890000,
            'qty'=>10,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Samsung DDR4 8GB',
            'category_id' => '3',
            'price' => 680000,
            'qty'=>10,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'Samsung DDR4 16GB',
            'category_id' => '3',
            'price' => 1350000,
            'qty'=>10,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'NVidia GeForce',
            'category_id' => '4',
            'price' => 650000,
            'qty'=>5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'NVidia RTX',
            'category_id' => '4',
            'price' => 10350000,
            'qty'=>5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'Seagate SSD 500GB',
            'category_id' => '5',
            'price' => 835000,
            'qty'=>5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'Seagate SSD 1T',
            'category_id' => '5',
            'price' => 1450000,
            'qty'=>5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'Enlight PSU',
            'category_id' => '6',
            'price' => 1450000,
            'qty'=>5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'Samsung LED 24 Inch',
            'category_id' => '7',
            'price' => 1450000,
            'qty'=>5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'Logiteh Wired MKB',
            'category_id' => '7',
            'price' => 1450000,
            'qty'=>5,
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
