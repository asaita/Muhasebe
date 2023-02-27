<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts_details', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('cari_id')->unsigned();
            $table->integer('transaction_types_id')->unsigned();


            $table->date('islem_tarihi');
            $table->decimal('islem_miktari');
            $table->text('aciklama');
            $table->decimal('bakiye');

            $table->foreign('cari_id')->references('id')->on('accounts')->onDelete('cascade');
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
        Schema::dropIfExists('accounts_details');
    }
}
