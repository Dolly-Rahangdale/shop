<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->string('full_name');
            $table->string('mob_no');
            $table->string('address');
            $table->string('email');
            $table->string('fb_account');
            $table->string('units');
            $table->integer('premium_registration');
            $table->integer('discount');
            $table->integer('total_payment');
            $table->string('payment_mode');
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
        Schema::dropIfExists('shops');
    }
}
