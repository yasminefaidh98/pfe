<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdDepotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_depots', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('customer_id')->nullable();
            $table->string('reference', 250)->nullable();
            $table->string('designation', 250)->nullable();
            $table->string('adresse', 250)->nullable();
            $table->tinyInteger('principale')->nullable()->default(0);
            $table->integer('deleted');
            $table->decimal('lon', 20, 10);
            $table->decimal('lat', 20, 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_depots');
    }
}
