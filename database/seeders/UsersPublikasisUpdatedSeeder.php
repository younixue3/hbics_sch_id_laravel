<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersPublikasisUpdatedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_publikasis_updated')->insert([
            ['user' => 1, 'publikasi' => 1, 'created_at' => today(), 'updated_at' => today()],
            ['user' => 1, 'publikasi' => 1, 'created_at' => today(), 'updated_at' => today()],
            ['user' => 1, 'publikasi' => 2, 'created_at' => today(), 'updated_at' => today()],
        ]);
    }
}
