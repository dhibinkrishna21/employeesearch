<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('designation_id');
            $table->string('phone_number');
            $table->timestamps();
        });

        Artisan::call('db:seed', ['--class' => 'UsersTableSeeder']);

        // DB::table('users')->insert([
        //     [
        //         'name' => 'John Doe',
        //         'department_id' => 1,
        //         'designation_id' => 1,
        //         'phone_number' => '1234567890',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Emily Johnson',
        //         'department_id' => 2,
        //         'designation_id' => 2,
        //         'phone_number' => '1234567890',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Jacob Smith',
        //         'department_id' => 3,
        //         'designation_id' => 3,
        //         'phone_number' => '1234567890',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Olivia Williams',
        //         'department_id' => 4,
        //         'designation_id' => 4,
        //         'phone_number' => '1234567890',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Ethan Brown',
        //         'department_id' => 5,
        //         'designation_id' => 5,
        //         'phone_number' => '1234567890',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Sophia Taylor',
        //         'department_id' => 1,
        //         'designation_id' => 5,
        //         'phone_number' => '1234567890',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]
        // ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
