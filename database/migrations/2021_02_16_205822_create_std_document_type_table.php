<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdDocumentTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_document_type', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->string('mode', 250);
            $table->string('label', 250);
            $table->string('designation', 250);
            $table->string('title', 250);
            $table->string('newbtn', 250);
            $table->integer('actif');
            $table->integer('cashflow');
            $table->integer('delivery');
            $table->integer('tf');
            $table->integer('rs');
            $table->integer('fodec');
            $table->integer('dc');
            $table->integer('customer_id');
            $table->integer('position');
            $table->string('icon', 250);
            $table->string('module', 250);
            $table->string('class', 250);
            $table->integer('dashboard');
            $table->string('color', 250);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_document_type');
    }
}
