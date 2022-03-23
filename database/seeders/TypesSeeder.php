<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            ['name' => 'paragraph'],
            ['name' => 'title'],
            ['name' => 'subtitle'],
            ['name' => 'list'],
            ['name' => 'image'],
            ['name' => 'video'],
        ]);
    }
}
