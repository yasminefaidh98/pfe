<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdFidelityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_fidelity', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('agent_reference');
            $table->integer('customer_id');
            $table->string('agent_raisonsocial');
            $table->integer('famille_agent_id');
            $table->string('famille_designation');
            $table->date('date_ajout');
            $table->date('date_expire');
            $table->string('codeFidelity');
            $table->integer('deleted')->default(0);
            $table->integer('pointFidelity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_fidelity');
    }
}
