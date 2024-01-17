<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;


class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::factory()->count(10)->create();
    }
}
