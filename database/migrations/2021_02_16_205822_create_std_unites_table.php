<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdUnitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_unites', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('customer_id')->nullable();
            $table->string('designation', 250)->nullable();
            $table->string('symbole', 250)->nullable();
            $table->integer('subunite')->nullable();
            $table->integer('subunite_coefficient')->nullable();
            $table->integer('supunite')->nullable();
            $table->integer('supunite_coefficient')->nullable();
            $table->integer('deleted');
            $table->string('reference', 250);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_unites');
    }
}
