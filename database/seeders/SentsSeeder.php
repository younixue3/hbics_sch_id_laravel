<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sents')->insert([
            ['message' => '<p>bla bla bla</p>'],
            ['message' => '<p>bla bla bla</p>'],
            ['message' => '<p>bla bla bla</p>'],
            ['message' => '<p>bla bla bla</p>'],
        ]);
    }
}
