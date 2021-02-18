<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdLogistiqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_logistique', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('customer_id')->nullable();
            $table->string('reference', 250)->nullable();
            $table->integer('categorie')->nullable();
            $table->integer('personnel_id_auto')->nullable()->index('logistique_Personnel');
            $table->string('matricule', 250)->nullable();
            $table->string('marque', 250)->nullable();
            $table->string('couleur', 250)->nullable();
            $table->integer('type_carburant')->nullable();
            $table->string('emplacement', 250)->nullable();
            $table->string('numero_chassis', 250)->nullable();
            $table->integer('nombre_sieges')->nullable();
            $table->integer('nombre_portes')->nullable();
            $table->date('kilometrage_dernier')->nullable();
            $table->integer('kilometrage_valeur')->nullable();
            $table->date('acquisition_date')->nullable();
            $table->decimal('valeur_vehicule', 10, 3)->nullable();
            $table->string('transmission', 250)->nullable();
            $table->decimal('degagementcoo', 10)->nullable();
            $table->integer('puissance_chevaux')->nullable();
            $table->decimal('puissance_taxes', 10, 3)->nullable();
            $table->integer('puissance_kw')->nullable();
            $table->decimal('prix_unitaire', 10, 3)->nullable();
            $table->decimal('charge_fixe', 10, 3)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_logistique');
    }
}
