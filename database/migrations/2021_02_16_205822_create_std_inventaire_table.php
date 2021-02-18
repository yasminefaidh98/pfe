<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdInventaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_inventaire', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->dateTime('datetimeadded')->useCurrent();
            $table->integer('status');
            $table->dateTime('date_start');
            $table->dateTime('date_end');
            $table->text('notes');
            $table->integer('user_id');
            $table->integer('customer_id');
            $table->string('reference', 250);
            $table->text('decisions');
            $table->dateTime('date_alteration_start')->nullable();
            $table->dateTime('date_alteration_end')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_inventaire');
    }
}
