<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_type', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->string('reference')->nullable();
            $table->string('designation')->nullable();
            $table->integer('customer_id');
            $table->integer('rs');
            $table->integer('deleted');
            $table->integer('pos');
            $table->integer('debiteur');
            $table->integer('offre')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_type');
    }
}
