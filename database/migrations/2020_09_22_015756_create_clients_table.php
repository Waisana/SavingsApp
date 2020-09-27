<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('categ_id');
            $table->foreign('categ_id')->references('id')->on('categories');
            $table->string('client_first_name', 100)->nullable();
            $table->string('client_last_name', 100)->nullable();
            $table->string('client_email', 100)->unique()->nullable();
            $table->string('client_national_id', 100)->nullable();
            $table->string('client_phone_number', 20)->nullable();
            $table->string('client_bank_account_number', 50)->nullable();
            $table->string('member_location', 100)->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
