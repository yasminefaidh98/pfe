<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdMatierepremiereMvtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_matierepremiere_mvt', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('customer_id');
            $table->integer('matierepremiere_id');
            $table->dateTime('datetimeadded')->useCurrent();
            $table->integer('document_id');
            $table->string('mvt_object', 2500);
            $table->decimal('qte_in', 10, 3);
            $table->decimal('qte_out', 10, 3);
            $table->integer('depot_id_in');
            $table->integer('depot_id_out');
            $table->string('status', 250);
            $table->string('type_document', 250);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_matierepremiere_mvt');
    }
}
