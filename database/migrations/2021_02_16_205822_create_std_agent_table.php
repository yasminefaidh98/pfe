<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdAgentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_agent', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('customer_id')->nullable();
            $table->integer('id_auto_migration')->nullable();
            $table->string('agent_type', 250)->nullable();
            $table->string('agent_reference', 250)->nullable();
            $table->string('agent_raisonsocial', 250)->nullable();
            $table->string('agent_matriculefiscale', 250)->nullable();
            $table->string('agent_registrecommerce', 250)->nullable();
            $table->string('agent_telephone', 250)->nullable();
            $table->string('agent_fax', 250)->nullable();
            $table->string('agent_email', 250)->nullable();
            $table->string('agent_siteweb', 250)->nullable();
            $table->decimal('agent_remiseglobale', 10, 3)->nullable();
            $table->string('agent_adresse', 250)->nullable();
            $table->integer('famille_agent_id')->nullable();
            $table->tinyInteger('exonore')->nullable();
            $table->string('region')->nullable();
            $table->integer('actif')->nullable();
            $table->integer('agent_rs');
            $table->integer('deleted');
            $table->string('codeFidelity');
            $table->integer('pointFidelity');
            $table->index(['agent_type', 'customer_id', 'deleted', 'agent_raisonsocial'], 'std_agent_idx_agent_custome_deleted_agent');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_agent');
    }
}
