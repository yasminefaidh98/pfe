<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_translation', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->string('org', 250)->nullable();
            $table->string('en', 250)->nullable();
            $table->string('fr', 250)->nullable();
            $table->string('ar', 250)->nullable();
            $table->string('cn', 250)->nullable();
            $table->string('de', 250)->nullable();
            $table->string('es', 250)->nullable();
            $table->string('he', 250)->nullable();
            $table->string('ur', 250)->nullable();
            $table->string('it', 250)->nullable();
            $table->string('jp', 250)->nullable();
            $table->string('ko', 250)->nullable();
            $table->string('nl', 250)->nullable();
            $table->string('pr', 250)->nullable();
            $table->string('ru', 250)->nullable();
            $table->string('tr', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_translation');
    }
}
