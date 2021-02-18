<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdInventoryLignesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_inventory_lignes', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('inventory_id');
            $table->integer('product_id');
            $table->decimal('qte_init', 10, 3)->nullable();
            $table->decimal('qte_entry', 10, 3)->nullable();
            $table->decimal('qte_difference', 10, 3)->nullable();
            $table->decimal('qte_alteration', 10, 3)->nullable();
            $table->decimal('qte_final', 10, 3)->nullable();
            $table->string('status', 250)->nullable();
            $table->string('decision', 2500)->nullable();
            $table->dateTime('qte_init_datetime');
            $table->dateTime('qte_entry_datetime');
            $table->dateTime('qte_difference_datetime');
            $table->dateTime('qte_alteration_datetime');
            $table->dateTime('qte_final_datetime');
            $table->integer('customer_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_inventory_lignes');
    }
}
