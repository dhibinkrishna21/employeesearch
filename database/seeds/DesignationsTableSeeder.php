<?php

use Illuminate\Database\Seeder;

class DesignationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designations')->insert([
            [
                'name' => 'Project Manager',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Software Engineer ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Systems Analyst',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Network Administrator',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'QA Engineer',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
