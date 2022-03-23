<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersPublikasisCreatedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_publikasis_created')->inser([
           ['user' => 1, 'publikasi' => 1, 'created_at' => today(), 'updated_at' => today()],
           ['user' => 1, 'publikasi' => 2, 'created_at' => today(), 'updated_at' => today()],
           ['user' => 1, 'publikasi' => 3, 'created_at' => today(), 'updated_at' => today()],
        ]);
    }
}
