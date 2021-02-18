<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdPosEspaceElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_pos_espace_elements', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('cid');
            $table->string('espace_id');
            $table->string('type');
            $table->string('text');
            $table->integer('positionTextX');
            $table->integer('positionTextY');
            $table->integer('fontSize');
            $table->integer('fontWeight');
            $table->integer('rotation');
            $table->string('color');
            $table->integer('width');
            $table->integer('height');
            $table->integer('positionX');
            $table->integer('positionY');
            $table->integer('borderWidth');
            $table->string('borderStyle');
            $table->string('borderColor');
            $table->integer('borderRadius');
            $table->string('backgroundColor');
            $table->integer('margin');
            $table->integer('padding');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_pos_espace_elements');
    }
}
