<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SentsStaffsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sents_staffs')->insert([
            ['sent' => 1, 'staff' => 1],
            ['sent' => 2, 'staff' => 1],
            ['sent' => 3, 'staff' => 1],
            ['sent' => 4, 'staff' => 1],
        ]);
    }
}
