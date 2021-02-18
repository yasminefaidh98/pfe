<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdMatierepremiereDepotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_matierepremiere_depot', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->dateTime('datetimeadded')->useCurrent();
            $table->integer('customer_id');
            $table->integer('matierepremiere_id');
            $table->integer('depot_id');
            $table->decimal('qte_stock', 10, 3);
            $table->string('status', 250);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_matierepremiere_depot');
    }
}
