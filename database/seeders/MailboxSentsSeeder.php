<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MailboxSentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mailbox_sents')->insert([
            ['mailbox' => 1, 'sent' => 1],
            ['mailbox' => 2, 'sent' => 2],
            ['mailbox' => 3, 'sent' => 3],
            ['mailbox' => 4, 'sent' => 4],
        ]);
    }
}
