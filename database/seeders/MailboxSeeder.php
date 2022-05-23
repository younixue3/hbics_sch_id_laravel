<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MailboxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mailbox')->insert([
            ['content' => 'Coco Frut'],
            ['kunjungan' => 1],
            ['kunjungan' => 2],
            ['kunjungan' => 3],
        ]);
    }
}
