<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            [
                'name' => 'Software Development Department',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'IT Operations Department',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'QA Department',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Project Management Office ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Information Security Department',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
