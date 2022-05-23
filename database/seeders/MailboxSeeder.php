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
            ['content' => 'Coco Frut', 'kunjungan' => null],
            ['content' => null, 'kunjungan' => 1],
            ['content' => null, 'kunjungan' => 2],
            ['content' => null, 'kunjungan' => 3],
        ]);
    }
}
