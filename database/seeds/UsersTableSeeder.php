<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'department_id' => 1,
                'designation_id' => 1,
                'phone_number' => '1234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Emily Johnson',
                'department_id' => 2,
                'designation_id' => 2,
                'phone_number' => '1234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jacob Smith',
                'department_id' => 3,
                'designation_id' => 3,
                'phone_number' => '1234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Olivia Williams',
                'department_id' => 4,
                'designation_id' => 4,
                'phone_number' => '1234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ethan Brown',
                'department_id' => 5,
                'designation_id' => 5,
                'phone_number' => '1234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sophia Taylor',
                'department_id' => 1,
                'designation_id' => 5,
                'phone_number' => '1234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
