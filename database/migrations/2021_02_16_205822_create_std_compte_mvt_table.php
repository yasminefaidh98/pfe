<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdCompteMvtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_compte_mvt', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->dateTime('op_date')->useCurrent();
            $table->string('op_id', 250)->nullable();
            $table->string('agent_id')->nullable()->index('INDEXAGENT');
            $table->string('compte_id')->nullable();
            $table->string('document_id')->nullable();
            $table->string('reglement_id')->nullable();
            $table->decimal('montant_debit', 10, 3)->nullable();
            $table->decimal('montant_credit', 10, 3)->nullable();
            $table->integer('customer_id')->nullable();
            $table->dateTime('date_ajout')->nullable();
            $table->string('agent_type', 250)->nullable();
            $table->string('document_type', 250)->nullable();
            $table->string('mvt_type', 250)->nullable();
            $table->string('exercice', 250)->nullable();
            $table->integer('deleted')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_compte_mvt');
    }
}
