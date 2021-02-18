<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdCompteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_compte', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('customer_id')->nullable();
            $table->string('reference')->nullable();
            $table->string('libelle')->nullable();
            $table->integer('type')->nullable();
            $table->integer('etat')->nullable();
            $table->integer('devise')->nullable();
            $table->decimal('solde_initial', 10, 3)->nullable();
            $table->decimal('solde_min', 10, 0)->nullable();
            $table->decimal('solde_max', 10, 0)->nullable();
            $table->date('date_creattion')->nullable();
            $table->integer('principal')->nullable();
            $table->integer('banque')->nullable();
            $table->integer('rib')->nullable();
            $table->integer('iban')->nullable();
            $table->integer('code_bic')->nullable();
            $table->integer('chequier')->nullable();
            $table->integer('agent_id');
            $table->integer('rs');
            $table->integer('deleted');
            $table->integer('pos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_compte');
    }
}
