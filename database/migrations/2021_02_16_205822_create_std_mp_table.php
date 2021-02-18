<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdMpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_mp', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('customer_id')->nullable();
            $table->string('reference', 250)->nullable();
            $table->string('designation', 250)->nullable();
            $table->decimal('prix_vente_ht', 10, 3)->nullable();
            $table->decimal('tva', 10, 3)->nullable();
            $table->decimal('manutention', 10, 3)->nullable();
            $table->decimal('transport', 10, 3)->nullable();
            $table->decimal('stock', 10, 3)->nullable();
            $table->tinyInteger('stock_negatif')->nullable();
            $table->integer('unite_id_auto')->nullable()->index('matiere_premiere_unite');
            $table->integer('famille_id_auto')->nullable()->index('matiere_premiere_famille');
            $table->integer('categorie_id')->nullable();
            $table->string('codebarre', 250)->nullable();
            $table->string('description', 1500)->nullable();
            $table->string('marque', 250)->nullable();
            $table->decimal('stock_minimum', 10, 3)->nullable();
            $table->decimal('stock_maximum', 10, 3)->nullable();
            $table->decimal('stock_alerte', 10, 3)->nullable();
            $table->tinyInteger('fodec')->nullable();
            $table->tinyInteger('serialisable')->nullable();
            $table->string('photo', 2500)->nullable();
            $table->tinyInteger('stock_gestion')->nullable();
            $table->decimal('prix_achat_ttc', 10, 3)->nullable();
            $table->string('famille_onix', 250)->nullable();
            $table->integer('actif')->nullable();
            $table->decimal('taux_tva_achat', 10, 3)->nullable();
            $table->decimal('tva_achat', 10, 3)->nullable();
            $table->decimal('coefficient', 10, 3)->nullable();
            $table->string('uniteP')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_mp');
    }
}
