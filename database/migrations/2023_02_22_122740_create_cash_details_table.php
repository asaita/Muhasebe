<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cari_id')->unsigned();
            $table->integer('payment_types_id')->unsigned();
            $table->integer('transaction_types_id')->unsigned();



            $table->date('islem_tarihi');
            $table->decimal('islem_miktari');
            $table->foreign('cari_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->foreign('payment_types_id')->references('id')->on('payment_types')->onDelete('cascade');
            $table->foreign('transaction_types_id')->references('id')->on('transaction_types')->onDelete('cascade');



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
        Schema::dropIfExists('cash_details');
    }
}
