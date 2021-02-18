<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdPosDeptFamilleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_pos_dept_famille', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('cid')->nullable();
            $table->string('dept_id')->nullable();
            $table->string('famille_id')->nullable();
            $table->integer('deleted')->nullable();
            $table->string('caisse_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_pos_dept_famille');
    }
}
