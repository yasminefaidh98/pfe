<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdPaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_pays', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('customer_id')->nullable();
            $table->string('libelle', 250)->nullable();
            $table->integer('user_id')->nullable();
            $table->dateTime('user_date_lastmodify')->nullable();
            $table->dateTime('user_date_add')->nullable();
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
        Schema::dropIfExists('std_pays');
    }
}
