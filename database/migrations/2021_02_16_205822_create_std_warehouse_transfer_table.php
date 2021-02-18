<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdWarehouseTransferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_warehouse_transfer', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->dateTime('dateadded')->useCurrent();
            $table->integer('warehouse_from_id');
            $table->integer('warehouse_to_id');
            $table->integer('customer_id');
            $table->string('exercice', 250);
            $table->integer('status')->default(0);
            $table->string('reference', 250);
            $table->decimal('products_count', 10, 3);
            $table->decimal('products_value', 10, 3);
            $table->text('notes');
            $table->integer('products_unique_count');
            $table->dateTime('delivery_date')->nullable();
            $table->dateTime('delivered_date')->nullable();
            $table->integer('deleted');
            $table->integer('close');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_warehouse_transfer');
    }
}
