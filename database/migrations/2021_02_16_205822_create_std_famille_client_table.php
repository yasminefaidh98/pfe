<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdFamilleClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_famille_client', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('id_auto_migration')->nullable();
            $table->integer('customer_id')->nullable();
            $table->string('famille_type', 250)->nullable();
            $table->string('reference', 250)->nullable();
            $table->string('designation', 250)->nullable();
            $table->integer('famille_id_auto')->nullable()->index('famille_famille');
            $table->string('categorie', 250)->nullable();
            $table->integer('deleted');
            $table->integer('fidelity')->default(0);
            $table->string('type_fidelity');
            $table->string('pourcentage_fidelity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_famille_client');
    }
}
