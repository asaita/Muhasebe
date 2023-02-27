<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cari_ad_unvan');
            $table->char('sahis_mi',2);
            $table->smallInteger('vergi_no');
            $table->string('vergi_dairesi');
            $table->smallInteger('tel');
            $table->smallInteger('gsm');
            $table->string('adres');
            $table->string('il');
            $table->string('ilce');
            $table->string('e-posta');
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
        Schema::dropIfExists('accounts');
        

    }
}
