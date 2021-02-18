<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdWarehouseTransferLignesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_warehouse_transfer_lignes', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('customer_id');
            $table->integer('warehouse_transfer_id');
            $table->integer('product_id');
            $table->decimal('qte', 10, 3);
            $table->decimal('price_sell', 10, 3);
            $table->decimal('price_sell_total', 10, 3);
            $table->integer('deleted');
            $table->integer('delivery');
            $table->string('reference', 250);
            $table->string('designation', 250);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_warehouse_transfer_lignes');
    }
}
