<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdDeviseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_devise', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->string('designation')->nullable();
            $table->string('symbole')->nullable();
            $table->integer('arrondu')->nullable();
            $table->integer('actif')->nullable();
            $table->integer('devise_default')->nullable();
            $table->string('reference')->nullable();
            $table->integer('customer_id')->nullable();
            $table->integer('deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_devise');
    }
}
