<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KunjungansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kunjungans')->insert([
            ['name' => 'Ricko', 'email' => 'caesarsmpn21@gmail.com', 'alamat' => 'jl.dimanaaja', 'kota_kab' => 'Samarinda', 'negara' => 'Indonesia', 'telepon' => '081080810', 'nama_calon_siswa' => 'Ricko', 'area_kunjungan' => 'HHK', 'tinkat_pendidikan' => 'HHK', 'tanggal_kunjungan' => '2022-05-23 11:58:49'],
            ['name' => 'Ricko', 'email' => 'caesarsmpn21@gmail.com', 'alamat' => 'jl.dimanaaja', 'kota_kab' => 'Samarinda', 'negara' => 'Indonesia', 'telepon' => '081080810', 'nama_calon_siswa' => 'Ricko', 'area_kunjungan' => 'HHK', 'tinkat_pendidikan' => 'HHK', 'tanggal_kunjungan' => '2022-05-23 11:58:49'],
            ['name' => 'Ricko', 'email' => 'caesarsmpn21@gmail.com', 'alamat' => 'jl.dimanaaja', 'kota_kab' => 'Samarinda', 'negara' => 'Indonesia', 'telepon' => '081080810', 'nama_calon_siswa' => 'Ricko', 'area_kunjungan' => 'HHK', 'tinkat_pendidikan' => 'HHK', 'tanggal_kunjungan' => '2022-05-23 11:58:49'],
        ]);
    }
}
