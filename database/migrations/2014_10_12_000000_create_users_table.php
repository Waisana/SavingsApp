<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
            $table->bigIncrements('id');
            $table->string('user_first_name', 255)->default('Admin');
            $table->string('user_last_name', 255)->default('Waisana');
            $table->string('email')->unique()->nullable()->default('admin@gmail.com');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 255);
            $table->string('role', 50)->default('admin');
            $table->rememberToken();
            $table->timestamps();

        });
        DB::table('users')->insert(array(
          
            ['password' => Hash::make('admin')],
            
            
        ));
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
