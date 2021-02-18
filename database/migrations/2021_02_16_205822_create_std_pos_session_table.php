<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdPosSessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_pos_session', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('customer_id');
            $table->string('user_id')->nullable();
            $table->string('status', 250);
            $table->integer('deleted');
            $table->string('session_id');
            $table->dateTime('date_cloture')->nullable();
            $table->string('caisse_id', 250);
            $table->decimal('total_vente', 10, 3);
            $table->decimal('total_paiement', 10, 3);
            $table->decimal('total_remise', 10, 3);
            $table->decimal('total_annulation', 10, 3);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_pos_session');
    }
}
