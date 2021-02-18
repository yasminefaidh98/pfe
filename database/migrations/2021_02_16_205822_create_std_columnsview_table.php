<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdColumnsviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_columnsview', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('customer_id')->nullable();
            $table->string('table_name', 250)->nullable();
            $table->string('column_name', 250)->nullable();
            $table->string('column_type', 250)->nullable();
            $table->string('designation', 250)->nullable();
            $table->tinyInteger('data_liste')->nullable();
            $table->tinyInteger('data_view')->nullable();
            $table->tinyInteger('data_create')->nullable();
            $table->tinyInteger('data_edit')->nullable();
            $table->string('data_tabs', 250)->nullable();
            $table->tinyInteger('obligatoire')->nullable()->default(0);
            $table->integer('position')->nullable()->default(0);
            $table->integer('print_col_width')->nullable()->default(0);
            $table->integer('print_number_format')->nullable()->default(3);
            $table->tinyInteger('print_view')->nullable()->default(0);
            $table->tinyInteger('print_value_number')->nullable()->default(0);
            $table->string('print_style_css', 2500)->nullable();
            $table->string('print_style_css_header', 2500)->nullable();
            $table->string('print_style_css_footer', 2500)->nullable();
            $table->string('print_table_reference', 250)->nullable();
            $table->string('print_table_column_reference', 250)->nullable();
            $table->string('print_col_align', 250)->nullable();
            $table->string('print_alias', 250)->nullable();
            $table->string('permission', 250)->nullable();
            $table->string('fktable', 250)->nullable();
            $table->string('fkcolumn', 250)->nullable();
            $table->string('fkcondition', 250)->nullable();
            $table->string('columntype', 250)->nullable();
            $table->string('extracss', 1000)->nullable();
            $table->integer('decimalcount')->nullable()->default(3);
            $table->integer('tri')->nullable()->default(0);
            $table->string('filtre', 250)->nullable()->default('0');
            $table->integer('checked')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_columnsview');
    }
}
