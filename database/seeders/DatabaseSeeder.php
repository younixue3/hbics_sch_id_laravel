<?php

namespace Database\Seeders;

use App\Models\FotoProfile;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            UsersRolesSeeder::class,
//            FasilitasSeeder::class,
            FotoProfileSeeder::class,
            KategorisSeeder::class,
            TypesSeeder::class,
//            PublikasisSeeder::class,
//            ContentsSeeder::class,
//            PublikasisContentsSeeder::class,
//            PublikasisKategorisSeeder::class,
//            UsersPublikasisCreatedSeeder::class,
//            UsersPublikasisUpdatedSeeder::class,
//            PrestasisSeeder::class,
//            KomunitasSeeder::class,
//            TeacherStaffSeeder::class,
            KunjungansSeeder::class,
            MailboxSeeder::class,
            SentsSeeder::class,
            SentsStaffsSeeder::class,
            MailboxSentsSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
