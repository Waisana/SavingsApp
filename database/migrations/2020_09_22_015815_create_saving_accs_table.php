<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavingAccsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saving_accs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('client_names');
            $table->string('client_plan');
            $table->double('amount_posted');
            $table->string('int_freq');
            $table->string('int_ret');
            $table->string('save_Desc');
            $table->double('min_bal');
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
        Schema::dropIfExists('saving_accs');
    }
}
