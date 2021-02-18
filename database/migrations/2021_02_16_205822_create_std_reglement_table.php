<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdReglementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_reglement', function (Blueprint $table) {
            $table->integer('customer_id')->nullable();
            $table->string('document_type', 250);
            $table->date('date_reglement')->nullable();
            $table->decimal('montant', 10, 3)->nullable();
            $table->string('num_cheque', 250)->nullable();
            $table->string('banque')->nullable();
            $table->integer('type_id')->nullable();
            $table->date('date_echeance')->nullable();
            $table->string('num_operation')->nullable();
            $table->string('etat')->nullable()->default('0');
            $table->integer('etat_cheque')->nullable()->default(1);
            $table->string('compte_id');
            $table->string('agent_id');
            $table->integer('deleted');
            $table->string('id_reference');
            $table->string('reglement_objet');
            $table->integer('encaissement');
            $table->integer('id_auto', true);
            $table->string('document_id', 250)->nullable();
            $table->integer('previous_reg');
            $table->integer('pos_session_id');
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_reglement');
    }
}
