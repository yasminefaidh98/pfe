<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_files', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('customer_id')->nullable();
            $table->string('libelle', 1000)->nullable();
            $table->string('nom_fichier', 1000)->nullable();
            $table->integer('nombre_vue')->nullable();
            $table->dateTime('date_ajout')->nullable();
            $table->string('table_name', 250)->nullable();
            $table->integer('table_idauto')->nullable();
            $table->integer('user_id')->nullable();
            $table->dateTime('user_date_add')->nullable();
            $table->dateTime('user_date_lastmodify')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_files');
    }
}
