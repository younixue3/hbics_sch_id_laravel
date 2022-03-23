<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublikasisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publikasis')->insert([
            ['title' => 'Web Dev Is The Best Profession Ever', 'status' => 'publish'],
            ['title' => 'Technology Is Everything Now! Top 10 The Best Tech', 'status' => 'reject'],
            ['title' => 'How To Shut Your Boss Mouth!', 'status' => 'draft'],
        ]);
    }
}
