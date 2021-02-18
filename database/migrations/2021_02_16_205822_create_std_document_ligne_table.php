<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdDocumentLigneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_document_ligne', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('customer_id')->nullable();
            $table->integer('document_id')->nullable();
            $table->string('document_type', 250)->nullable();
            $table->integer('article_id')->nullable();
            $table->string('document_ligne_description', 2500)->nullable();
            $table->decimal('document_ligne_quantite', 10, 3)->nullable();
            $table->decimal('document_ligne_prixht', 10, 3)->nullable();
            $table->decimal('document_ligne_tva', 10, 3)->nullable();
            $table->decimal('document_ligne_remise', 10, 3)->nullable();
            $table->decimal('document_ligne_montantht', 10, 3)->nullable();
            $table->decimal('document_ligne_montantht_remise', 10, 3)->nullable();
            $table->decimal('document_ligne_montant_fodec', 10, 3)->nullable();
            $table->decimal('document_ligne_tva_valeur', 10, 3)->nullable();
            $table->decimal('document_ligne_montantttc', 10, 3)->nullable();
            $table->string('alias_1', 250)->nullable();
            $table->string('alias_2', 250)->nullable();
            $table->string('alias_3', 250)->nullable();
            $table->string('alias_4', 250)->nullable();
            $table->string('alias_5', 250)->nullable();
            $table->date('date_fabrication')->nullable();
            $table->date('date_expiration')->nullable();
            $table->string('objet', 250)->nullable();
            $table->string('document_ligne_designation', 250)->nullable();
            $table->string('document_ligne_reference', 250)->nullable();
            $table->string('serialnumber', 250)->nullable();
            $table->decimal('document_ligne_total_ht', 10, 3)->nullable();
            $table->integer('delivery');
            $table->decimal('document_ligne_montant_dc', 10, 3)->nullable();
            $table->decimal('document_ligne_prixttc', 10, 3)->nullable();
            $table->integer('deleted')->nullable()->default(0);
            $table->string('posuid', 250)->nullable();
            $table->decimal('document_ligne_remise_percentage', 10, 3)->nullable();
            $table->decimal('document_ligne_prixht_remise', 10, 3)->nullable();
            $table->decimal('document_ligne_prixttc_remise', 10, 3)->nullable();
            $table->decimal('document_ligne_tva_valeur_remise', 10, 3)->nullable();
            $table->dateTime('document_ligne_date')->useCurrent();
            $table->index(['document_id', 'deleted'], 'OPTINDEX');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_document_ligne');
    }
}
