<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdMatierepremiereTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_matierepremiere', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('customer_id')->nullable();
            $table->string('reference', 250)->nullable();
            $table->string('designation', 250)->nullable();
            $table->decimal('prix_achat_ht', 10, 3)->nullable()->default(0.000);
            $table->decimal('tva', 10, 3)->nullable()->default(0.000);
            $table->decimal('manutention', 10, 3)->nullable()->default(0.000);
            $table->decimal('transport', 10, 3)->nullable()->default(0.000);
            $table->decimal('prix_vente_ht', 10, 3)->nullable()->default(0.000);
            $table->decimal('stock', 10, 3)->nullable()->default(0.000);
            $table->tinyInteger('stock_negatif')->nullable();
            $table->integer('unite_id_auto')->nullable()->index('matiere_premiere_unite');
            $table->integer('famille_id_auto')->nullable()->index('matiere_premiere_famille');
            $table->integer('categorie_id')->nullable();
            $table->string('prix_miseajour', 250)->nullable();
            $table->string('codebarre', 250)->nullable();
            $table->string('description', 1500)->nullable();
            $table->string('marque', 250)->nullable();
            $table->decimal('stock_minimum', 10, 3)->nullable()->default(0.000);
            $table->decimal('stock_maximum', 10, 3)->nullable()->default(0.000);
            $table->decimal('stock_alerte', 10, 3)->nullable()->default(0.000);
            $table->tinyInteger('fodec')->nullable();
            $table->tinyInteger('serialisable')->nullable();
            $table->decimal('mp_prixconseille', 10, 3)->nullable()->default(0.000);
            $table->string('photo', 2500)->nullable();
            $table->tinyInteger('stock_gestion')->nullable();
            $table->string('mode_calcul_prix_vente', 250)->nullable();
            $table->decimal('marge_pourcentage', 10)->nullable()->default(0.00);
            $table->decimal('marge_valeur', 10, 3)->nullable()->default(0.000);
            $table->decimal('prix_achat_ttc', 10, 3)->nullable()->default(0.000);
            $table->decimal('prix_vente_ttc', 10, 3)->nullable()->default(0.000);
            $table->integer('actif')->nullable()->default(0);
            $table->decimal('taux_tva_vente', 10, 3)->nullable()->default(0.000);
            $table->decimal('taux_tva_achat', 10, 3)->nullable()->default(0.000);
            $table->decimal('tva_achat', 10, 3)->nullable()->default(0.000);
            $table->integer('pos');
            $table->integer('deleted');
            $table->integer('dc');
            $table->integer('import_id');
            $table->integer('pos_favoris');
            $table->integer('remise_applicable');
            $table->decimal('marge_pourcentage_min', 10, 3);
            $table->integer('balance_format')->nullable();
            $table->integer('balance_type')->nullable();
            $table->string('balance_touche')->nullable();
            $table->integer('balance_dlc')->nullable();
            $table->integer('balance_export')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_matierepremiere');
    }
}
