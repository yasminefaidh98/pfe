<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdPosDeptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_pos_dept', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('cid')->nullable();
            $table->integer('deleted')->nullable();
            $table->string('caisse_id')->nullable();
            $table->string('libelle')->nullable();
            $table->string('printer')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_pos_dept');
    }
}
