<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('form')->insert([
            ['name' => 'pexels-宇航-钱-10641436.mp4', 'type' => 'video', 'area' => 'tk'],
            ['name' => 'chris-ried-bN5XdU-bap4-unsplash.webp', 'type' => 'img', 'area' => 'sd'],
            ['name' => 'marvin-meyer-SYTO3xs06fU-unsplash.webp', 'type' => 'img', 'area' => 'smp'],
            ['name' => 'video.mp4', 'type' => 'video', 'area' => 'sma'],
            ['name' => 'austin-poon-JO_S6ewBqAk-unsplash.webp', 'type' => 'img', 'area' => 'tk'],
            ['name' => 'pexels-anna-nekrashevich-6799742.mp4', 'type' => 'video', 'area' => 'sd'],
            ['name' => 'andras-vas-Bd7gNnWJBkU-unsplash.webp', 'type' => 'img', 'area' => 'smp'],
            ['name' => 'domenico-loia-hGV2TfOh0ns-unsplash.webp', 'type' => 'img', 'area' => 'sma'],
            ['name' => 'luca-bravo-XJXWbfSo2f0-unsplash.webp', 'type' => 'img', 'area' => 'tk'],
            ['name' => 'alex-knight-2EJCSULRwC8-unsplash.webp', 'type' => 'img', 'area' => 'sd'],
            ['name' => 'Pexels_Videos_1350205.mp4', 'type' => 'video', 'area' => 'smp'],
            ['name' => 'pexels-宇航-钱-10641436.mp4', 'type' => 'video', 'area' => 'sma'],
        ]);
    }
}
