<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_roles')->insert([
            ['user' => 1, 'role' => 2,],
            ['user' => 1, 'role' => 3,],
            ['user' => 1, 'role' => 1,],
        ]);
    }
}
