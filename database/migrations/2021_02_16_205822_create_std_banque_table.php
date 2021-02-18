<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdBanqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_banque', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->string('libelle')->nullable();
            $table->string('adresse')->nullable();
            $table->integer('telephone')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->integer('customer_id')->nullable();
            $table->integer('deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_banque');
    }
}
