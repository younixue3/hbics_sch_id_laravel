<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrestasisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prestasis')->insert([
            ['name' => 'Jane Doe', 'prestasi' => 'Juara 1', 'detail_prestasi' => 'Junior Software Engineer', 'area' => 'hhk'],
            ['name' => 'John Doe', 'prestasi' => 'Juara 2', 'detail_prestasi' => 'Senior Software Engineer', 'area' => 'sma'],
            ['name' => 'Jone Doe', 'prestasi' => 'Juara 3', 'detail_prestasi' => 'Abstract Art', 'area' => 'smp'],
            ['name' => 'Jone Doe', 'prestasi' => 'Juara 2', 'detail_prestasi' => 'Copywriting Competition', 'area' => 'sd'],
            ['name' => 'Jane Doe', 'prestasi' => 'Juara 1', 'detail_prestasi' => 'Junior Software Engineer', 'area' => 'hhk'],
            ['name' => 'John Doe', 'prestasi' => 'Juara 2', 'detail_prestasi' => 'Senior Software Engineer', 'area' => 'sma'],
            ['name' => 'Jone Doe', 'prestasi' => 'Juara 3', 'detail_prestasi' => 'Abstract Art', 'area' => 'smp'],
            ['name' => 'Jone Doe', 'prestasi' => 'Juara 2', 'detail_prestasi' => 'Copywriting Competition', 'area' => 'sd'],
            ['name' => 'Jane Doe', 'prestasi' => 'Juara 1', 'detail_prestasi' => 'Junior Software Engineer', 'area' => 'hhk'],
            ['name' => 'John Doe', 'prestasi' => 'Juara 2', 'detail_prestasi' => 'Senior Software Engineer', 'area' => 'sma'],
            ['name' => 'Jone Doe', 'prestasi' => 'Juara 3', 'detail_prestasi' => 'Abstract Art', 'area' => 'smp'],
            ['name' => 'Jone Doe', 'prestasi' => 'Juara 2', 'detail_prestasi' => 'Copywriting Competition', 'area' => 'sd'],
            ['name' => 'Jane Doe', 'prestasi' => 'Juara 1', 'detail_prestasi' => 'Junior Software Engineer', 'area' => 'hhk'],
            ['name' => 'John Doe', 'prestasi' => 'Juara 2', 'detail_prestasi' => 'Senior Software Engineer', 'area' => 'sma'],
            ['name' => 'Jone Doe', 'prestasi' => 'Juara 3', 'detail_prestasi' => 'Abstract Art', 'area' => 'smp'],
            ['name' => 'Jone Doe', 'prestasi' => 'Juara 2', 'detail_prestasi' => 'Copywriting Competition', 'area' => 'sd'],
        ]);
    }
}
