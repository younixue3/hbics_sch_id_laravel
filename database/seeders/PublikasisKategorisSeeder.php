<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublikasisKategorisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publikasis_kategoris')->insert([
            ['publikasi' => 1, 'kategori' => 1],
            ['publikasi' => 1, 'kategori' => 3],
            ['publikasi' => 2, 'kategori' => 2],
            ['publikasi' => 1, 'kategori' => 3],
        ]);
    }
}
