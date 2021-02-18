<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdFamilleClientFamilleMpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_famille_client_famille_mp', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('famille_client_id');
            $table->integer('famille_mp_id');
            $table->decimal('remise', 10, 3);
            $table->integer('customer_id');
            $table->integer('deleted');
            $table->integer('actif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_famille_client_famille_mp');
    }
}
