<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdTaxeRsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_taxe_rs', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->decimal('taux', 10, 3)->nullable();
            $table->string('designation', 250)->nullable();
            $table->date('date_debut')->nullable();
            $table->date('date_fin')->nullable();
            $table->integer('customer_id')->nullable();
            $table->decimal('minimum', 10, 3)->nullable();
            $table->string('reference', 250);
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
        Schema::dropIfExists('std_taxe_rs');
    }
}
