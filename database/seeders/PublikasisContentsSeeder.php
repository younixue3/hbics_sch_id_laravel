<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublikasisContentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publikasis_contents')->insert([
            ['publikasi' => 1, 'content' => 1],
            ['publikasi' => 2, 'content' => 2],
            ['publikasi' => 3, 'content' => 3],
        ]);
    }
}
