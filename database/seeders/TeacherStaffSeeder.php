<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teacher_staff')->insert([
            ['first_name' => 'Ricko', 'last_name' => 'Caesar Aprilla Tiaka', 'area' => 'qrd', 'profesi' => 'Web Developer', 'email' => 'example@email.com'],
            ['first_name' => 'Christian', 'last_name' => 'Wibisono', 'area' => 'qrd', 'profesi' => 'Publication Officer', 'email' => 'example@email.com'],
            ['first_name' => 'Rikhi', 'last_name' => 'Angryawan', 'area' => 'qrd', 'profesi' => 'Internal Designer', 'email' => 'example@email.com'],
            ['first_name' => 'Fachryan', 'last_name' => 'Dzulfikar', 'area' => 'qrd', 'profesi' => 'External Designer', 'email' => 'example@email.com'],
            ['first_name' => 'Jane', 'last_name' => 'Doe Much', 'area' => 'hhk', 'profesi' => 'Teacher of Sentra Balok', 'email' => 'example@email.com'],
            ['first_name' => 'Jane', 'last_name' => 'Doe Much', 'area' => 'sdk', 'profesi' => 'Teacher of Mathematics', 'email' => 'example@email.com'],
            ['first_name' => 'Jane', 'last_name' => 'Doe Much', 'area' => 'smpk', 'profesi' => 'Teacher of Arts', 'email' => 'example@email.com'],
            ['first_name' => 'Jane', 'last_name' => 'Doe Much', 'area' => 'smak', 'profesi' => 'Teacher of Sports', 'email' => 'example@email.com'],
            ['first_name' => 'Jane', 'last_name' => 'Doe Much', 'area' => 'hhk', 'profesi' => 'Teacher of Sentra Balok', 'email' => 'example@email.com'],
            ['first_name' => 'Jane', 'last_name' => 'Doe Much', 'area' => 'sdk', 'profesi' => 'Teacher of Mathematics', 'email' => 'example@email.com'],
            ['first_name' => 'Jane', 'last_name' => 'Doe Much', 'area' => 'smpk', 'profesi' => 'Teacher of Arts', 'email' => 'example@email.com'],
            ['first_name' => 'Jane', 'last_name' => 'Doe Much', 'area' => 'smak', 'profesi' => 'Teacher of Sports', 'email' => 'example@email.com'],
            ['first_name' => 'Jane', 'last_name' => 'Doe Much', 'area' => 'hhk', 'profesi' => 'Teacher of Sentra Balok', 'email' => 'example@email.com'],
            ['first_name' => 'Jane', 'last_name' => 'Doe Much', 'area' => 'sdk', 'profesi' => 'Teacher of Mathematics', 'email' => 'example@email.com'],
            ['first_name' => 'Jane', 'last_name' => 'Doe Much', 'area' => 'smpk', 'profesi' => 'Teacher of Arts', 'email' => 'example@email.com'],
            ['first_name' => 'Jane', 'last_name' => 'Doe Much', 'area' => 'smak', 'profesi' => 'Teacher of Sports', 'email' => 'example@email.com'],
            ['first_name' => 'Jane', 'last_name' => 'Doe Much', 'area' => 'finance', 'profesi' => 'Admininstration', 'email' => 'example@email.com'],
            ['first_name' => 'Jane', 'last_name' => 'Doe Much', 'area' => 'finance', 'profesi' => 'Admininstration', 'email' => 'example@email.com'],
            ['first_name' => 'Jane', 'last_name' => 'Doe Much', 'area' => 'finance', 'profesi' => 'Admininstration', 'email' => 'example@email.com'],
            ['first_name' => 'Jane', 'last_name' => 'Doe Much', 'area' => 'finance', 'profesi' => 'Admininstration', 'email' => 'example@email.com'],
            ['first_name' => 'Jane', 'last_name' => 'Doe Much', 'area' => 'hrga', 'profesi' => 'Admininstration', 'email' => 'example@email.com'],
            ['first_name' => 'Jane', 'last_name' => 'Doe Much', 'area' => 'hrga', 'profesi' => 'Admininstration', 'email' => 'example@email.com'],
            ['first_name' => 'Jane', 'last_name' => 'Doe Much', 'area' => 'hrga', 'profesi' => 'Admininstration', 'email' => 'example@email.com'],
            ['first_name' => 'Daniel', 'last_name' => 'Alexander', 'area' => 'hrga', 'profesi' => 'ICT', 'email' => 'example@email.com'],
            ['first_name' => 'Novry', 'last_name' => 'Gideon', 'area' => 'hrga', 'profesi' => 'ICT', 'email' => 'example@email.com'],
            ['first_name' => 'Novry', 'last_name' => 'Gideon', 'area' => 'hrga', 'profesi' => 'ICT', 'email' => 'example@email.com'],
        ]);
    }
}
