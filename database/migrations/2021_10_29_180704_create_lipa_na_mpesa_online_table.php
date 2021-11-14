<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLipaNaMpesaOnlineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lipa_na_mpesa_online', function (Blueprint $table) {
            $table->id();
            $table->longText('resultDesc');
            $table->string('resultCode');
            $table->string('merchantRequestID');
            $table->string('checkoutRequestID');
            $table->float('amount');
            $table->string('mpesaReceiptNumber');
            $table->string('balance');
            $table->dateTime('transactionDate');
            $table->string('phoneNumber');
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
        Schema::dropIfExists('lipa_na_mpesa_online');
    }
}
