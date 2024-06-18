<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        DB::table('users')->insert([
           [
                'username'=> 'Vincensius',
                'email' => "adyatmav@gmail.com",
                'phone_number'   => '0814-7667-2423',
                'password'  => Hash::make('vito123'),
                'role_id' => 1
           ]
        ]);
    }
}
