<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdFicheTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_fiche', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('customer_id')->nullable();
            $table->string('reference', 250)->nullable();
            $table->string('designation', 250)->nullable();
            $table->integer('unites_id')->nullable();
            $table->date('document_dateajout')->nullable();
            $table->decimal('tva', 10, 0)->nullable();
            $table->decimal('prix_vente_ht', 10, 3)->nullable();
            $table->decimal('taux_tva_vente', 10, 3)->nullable();
            $table->decimal('prix_vente_ttc', 10, 3)->nullable();
            $table->integer('qantite')->nullable();
            $table->tinyInteger('document_fodec')->nullable()->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_fiche');
    }
}
