<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdCompostansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_compostans', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('customer_id')->nullable();
            $table->integer('fiche_id')->nullable();
            $table->integer('article_id')->nullable();
            $table->decimal('document_ligne_quantite', 10, 3)->nullable();
            $table->string('document_ligne_designation', 250)->nullable();
            $table->string('document_ligne_reference', 250)->nullable();
            $table->decimal('document_ligne_prixht', 10, 3)->nullable();
            $table->decimal('document_ligne_tva', 10, 3)->nullable();
            $table->decimal('document_ligne_achat_ttc', 10, 3)->nullable();
            $table->string('document_ligne_uniteP')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_compostans');
    }
}
