<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            ['name' => 'Happy Holy Kids', 'url' => 'kelompok-bermain-taman-kanak-kanak'],
            ['name' => 'Sekolah Dasar', 'url' => 'sekolah-dasar'],
            ['name' => 'Sekolah Menengah Pertama', 'url' => 'sekolah-menengah-pertama'],
            ['name' => 'Sekolah Menengah Atas', 'url' => 'sekolah-menengah-atas']
        ]);
    }
}
