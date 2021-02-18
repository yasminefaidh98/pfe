<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdDocumentPrintCssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_document_print_css', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->string('libelle', 250)->nullable();
            $table->text('script')->nullable();
            $table->integer('customer_id')->nullable();
            $table->integer('lignes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_document_print_css');
    }
}
