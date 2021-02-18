<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdFamilleFournisseurServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_famille_fournisseur_service', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('id_auto_migration')->nullable();
            $table->integer('customer_id')->nullable();
            $table->string('famille_type', 250)->nullable();
            $table->string('reference', 250)->nullable();
            $table->string('designation', 250)->nullable();
            $table->integer('famille_id_auto')->nullable()->index('famille_famille');
            $table->string('categorie', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_famille_fournisseur_service');
    }
}
