<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdNumerotationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_numerotation', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('customer_id')->nullable();
            $table->string('libelle', 250)->nullable();
            $table->string('prefixe', 250)->nullable();
            $table->string('suffixe', 250)->nullable();
            $table->integer('numbers')->nullable()->default(3);
            $table->integer('compteur')->nullable();
            $table->string('table_name', 250)->nullable();
            $table->string('exercice', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_numerotation');
    }
}
