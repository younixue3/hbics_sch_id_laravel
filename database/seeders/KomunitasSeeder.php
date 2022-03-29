<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KomunitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('komunitas')->insert([
            ['name' => 'Jane Doe', 'status' => 'Alumni HHK Harapan Bangsa Tahun Ajaran 2021 (SDK Harapan Bangsa Balikpapan)', 'pesan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum sollicitudin tellus, a consectetur mi bibendum sit amet. Morbi ac felis est.', 'area' => 'hhk', 'connection' => 'alumni'],
            ['name' => 'Jane Doe', 'status' => 'Alumni SDK Harapan Bangsa Tahun Ajaran 2020 (SMPK Harapan Bangsa Balikpapan)', 'pesan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum sollicitudin tellus, a consectetur mi bibendum sit amet. Morbi ac felis est.', 'area' => 'sd', 'connection' => 'alumni'],
            ['name' => 'Jane Doe', 'status' => 'Alumni SMPK Harapan Bangsa Tahun Ajaran 2019 (SMAK Harapan Bangsa Balikpapan)', 'pesan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum sollicitudin tellus, a consectetur mi bibendum sit amet. Morbi ac felis est.', 'area' => 'smp', 'connection' => 'alumni'],
            ['name' => 'Jane Doe', 'status' => 'Alumni SMAK Harapan Bangsa Tahun Ajaran 2018 (Univ. Negeri Malang - Fakultas Akuntansi)', 'pesan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum sollicitudin tellus, a consectetur mi bibendum sit amet. Morbi ac felis est.', 'area' => 'sma', 'connection' => 'alumni'],
            ['name' => 'Jane Doe', 'status' => 'Alumni HHK Harapan Bangsa Tahun Ajaran 2017 (SDK Harapan Bangsa Balikpapan)', 'pesan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum sollicitudin tellus, a consectetur mi bibendum sit amet. Morbi ac felis est.', 'area' => 'hhk', 'connection' => 'alumni'],
            ['name' => 'Jane Doe', 'status' => 'Alumni SDK Harapan Bangsa Tahun Ajaran 2016 (SMPK Harapan Bangsa Balikpapan)', 'pesan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum sollicitudin tellus, a consectetur mi bibendum sit amet. Morbi ac felis est.', 'area' => 'sd', 'connection' => 'alumni'],
            ['name' => 'Jane Doe', 'status' => 'Alumni SMPK Harapan Bangsa Tahun Ajaran 2015 (SMAK Harapan Bangsa Balikpapan)', 'pesan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum sollicitudin tellus, a consectetur mi bibendum sit amet. Morbi ac felis est.', 'area' => 'smp', 'connection' => 'alumni'],
            ['name' => 'Jane Doe', 'status' => 'Alumni SMAK Harapan Bangsa Tahun Ajaran 2014 (Univ. Negeri Malang - Fakultas Akuntansi)', 'pesan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum sollicitudin tellus, a consectetur mi bibendum sit amet. Morbi ac felis est.', 'area' => 'sma', 'connection' => 'alumni'],
            ['name' => 'Jane Doe', 'status' => 'GOTO - Back-End Programmer', 'pesan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum sollicitudin tellus, a consectetur mi bibendum sit amet. Morbi ac felis est.', 'area' => 'hhk', 'connection' => 'alumni'],
            ['name' => 'Jane Doe', 'status' => 'Bukalapak - Senior Front-End Programmer', 'pesan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum sollicitudin tellus, a consectetur mi bibendum sit amet. Morbi ac felis est.', 'area' => 'sd', 'connection' => 'alumni'],
            ['name' => 'Jane Doe', 'status' => 'Kaspersky - Security Data Analyst', 'pesan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum sollicitudin tellus, a consectetur mi bibendum sit amet. Morbi ac felis est.', 'area' => 'smp', 'connection' => 'alumni'],
            ['name' => 'Ricko Tiaka', 'status' => 'RDeveloper - Founder, Multi-Task Programmer', 'pesan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum sollicitudin tellus, a consectetur mi bibendum sit amet. Morbi ac felis est.', 'area' => 'sma', 'connection' => 'alumni'],
            ['name' => 'Jane Doe', 'status' => 'Orang Tua Siswa (Jane Doe, HHK Harapan Bangsa Balikpapan)', 'pesan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum sollicitudin tellus, a consectetur mi bibendum sit amet. Morbi ac felis est.', 'area' => 'hhk', 'connection' => 'orang_tua'],
            ['name' => 'Jane Doe', 'status' => 'Orang Tua Siswa (Jane Doe, SDK Harapan Bangsa Balikpapan)', 'pesan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum sollicitudin tellus, a consectetur mi bibendum sit amet. Morbi ac felis est.', 'area' => 'sd', 'connection' => 'orang_tua'],
            ['name' => 'Jane Doe', 'status' => 'Orang Tua Siswa (Jane Doe, SMPK Harapan Bangsa Balikpapan)', 'pesan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum sollicitudin tellus, a consectetur mi bibendum sit amet. Morbi ac felis est.', 'area' => 'smp', 'connection' => 'orang_tua'],
            ['name' => 'Ricko Tiaka', 'status' => 'Orang Tua Siswa (Jane Doe, SMAK Harapan Bangsa Balikpapan)', 'pesan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum sollicitudin tellus, a consectetur mi bibendum sit amet. Morbi ac felis est.', 'area' => 'sma', 'connection' => 'orang_tua']
        ]);
    }
}
