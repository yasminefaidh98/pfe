<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdPosEspaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_pos_espace', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->string('cid', 250)->nullable();
            $table->string('libelle', 250)->nullable();
            $table->integer('caisse_id')->nullable();
            $table->integer('deleted')->nullable();
            $table->integer('plansimple');
            $table->integer('nbretable');
            $table->integer('defaut');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_pos_espace');
    }
}
