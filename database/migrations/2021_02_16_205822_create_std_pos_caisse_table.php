<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdPosCaisseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_pos_caisse', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('cid')->nullable();
            $table->string('libelle', 250)->nullable();
            $table->string('depot_id', 250)->nullable();
            $table->string('compte_id', 250)->nullable();
            $table->integer('moderesto')->nullable();
            $table->integer('actif')->nullable();
            $table->integer('deleted')->nullable();
            $table->integer('tablemanagement')->nullable();
            $table->string('printer', 250);
            $table->integer('webprinter')->nullable()->default(1);
            $table->integer('plansimple')->nullable();
            $table->integer('nbretable')->nullable();
            $table->string('methode_payment')->default('0');
            $table->integer('debit')->default(0);
            $table->integer('debit2')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_pos_caisse');
    }
}
