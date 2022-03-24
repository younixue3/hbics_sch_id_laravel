<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            ['randKey' => Str::random(8), 'title' => 'Web Dev Is The Best Profession Ever', 'status' => 'publish', 'created_at' => today(), 'updated_at' => today()],
            ['randKey' => Str::random(8), 'title' => 'Technology Is Everything Now! Top 10 The Best Tech', 'status' => 'reject', 'created_at' => today(), 'updated_at' => today()],
            ['randKey' => Str::random(8), 'title' => 'How To Shut Your Boss Mouth!', 'status' => 'draft', 'created_at' => today(), 'updated_at' => today()],
        ]);
    }
}
