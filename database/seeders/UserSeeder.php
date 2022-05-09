<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

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
            'name' => 'admin_' . Str::random(3),
            'email' => 'admin@gmail.com',
            'randKey' => Str::random(40) . '_admin',
            'password' => Hash::make('password'),
            'is_super_admin' => true
        ]);
    }
}
