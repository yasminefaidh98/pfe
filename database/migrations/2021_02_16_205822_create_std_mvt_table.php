<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdMvtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_mvt', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->string('reference_mvt')->nullable();
            $table->date('date_valeur')->nullable();
            $table->integer('compte_source')->nullable();
            $table->integer('compte_des')->nullable();
            $table->decimal('montant', 10, 3)->nullable();
            $table->string('libelle')->nullable();
            $table->string('mvt_exercice')->nullable();
            $table->integer('etat_mvt')->nullable();
            $table->integer('customer_id')->nullable();
            $table->integer('etat')->nullable();
            $table->integer('document_id')->nullable();
            $table->integer('agent_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_mvt');
    }
}
