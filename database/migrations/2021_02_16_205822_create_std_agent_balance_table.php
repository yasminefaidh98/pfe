<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdAgentBalanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_agent_balance', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('agent_id')->nullable();
            $table->integer('document_id')->nullable();
            $table->string('object', 2500)->nullable();
            $table->decimal('amount_in', 10, 3)->nullable();
            $table->decimal('amount_out', 10, 3)->nullable();
            $table->dateTime('datetimeadded')->nullable()->useCurrent();
            $table->dateTime('datetimepayment')->nullable()->useCurrent();
            $table->string('status', 250)->nullable();
            $table->string('mode', 250)->nullable();
            $table->integer('customer_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_agent_balance');
    }
}
