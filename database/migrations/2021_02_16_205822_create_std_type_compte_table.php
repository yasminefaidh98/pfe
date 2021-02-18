<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdTypeCompteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_type_compte', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->string('libelle')->nullable();
            $table->integer('customer_id')->nullable();
            $table->string('reference', 250);
            $table->integer('deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_type_compte');
    }
}
