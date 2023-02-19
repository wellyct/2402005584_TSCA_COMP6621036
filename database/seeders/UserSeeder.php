<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Welly',
            'email' => 'welly@cbn.id',
            'password' => Hash::make('secret'),
            'role'=> 1,
            'phone'=> '2402005584',
            'location' => 'Binus OL Tangerang',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Member',
            'email' => 'member@cbn.id',
            'password' => Hash::make('secret'),
            'role'=> 2,
            'phone'=> '0711xxxx',
            'location' => 'Binus OL Palembang',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Anggota',
            'email' => 'anggota@cbn.id',
            'password' => Hash::make('secret'),
            'role'=> 2,
            'phone'=> '021xxxx',
            'location' => 'Binus OL Jakarta',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Peserta',
            'email' => 'peserta@cbn.id',
            'password' => Hash::make('secret'),
            'role'=> 2,
            'phone'=> '031xxx',
            'location' => 'Binus OL Surabaya',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Majikan',
            'email' => 'majikan@cbn.id',
            'password' => Hash::make('secret'),
            'role'=> 1,
            'phone'=> '021bbbb',
            'location' => 'Binus OL Tangerang',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Tamu',
            'email' => 'tamu@cbn.id',
            'password' => Hash::make('secret'),
            'role'=> 0,
            'phone'=> '024xxxx',
            'location' => 'Binus OL Semarang',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    
    }
}
