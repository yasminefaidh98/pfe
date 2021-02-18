<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdDocumentEtatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_document_etat', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->string('libelle', 250)->nullable();
            $table->string('designation', 250)->nullable();
            $table->string('valeur', 250)->nullable();
            $table->string('style', 250)->nullable();
            $table->string('classcss', 250)->nullable();
            $table->integer('position')->nullable();
            $table->integer('customer_id')->nullable();
            $table->string('label', 250);
            $table->integer('nodelete');
            $table->integer('forallcustomer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_document_etat');
    }
}
