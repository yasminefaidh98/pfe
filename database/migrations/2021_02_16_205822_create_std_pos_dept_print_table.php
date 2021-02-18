<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdPosDeptPrintTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_pos_dept_print', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('cid');
            $table->dateTime('dateheure');
            $table->string('uid');
            $table->string('mp_id');
            $table->string('mp_name');
            $table->string('ligne_id');
            $table->decimal('qte', 10, 3);
            $table->integer('printed');
            $table->string('famille_id');
            $table->string('dept_id');
            $table->string('caisse_id');
            $table->string('printer');
            $table->string('ticket_id');
            $table->string('ticket_reference');
            $table->string('session_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_pos_dept_print');
    }
}
