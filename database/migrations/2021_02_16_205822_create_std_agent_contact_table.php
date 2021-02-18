<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdAgentContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_agent_contact', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('customer_id')->nullable();
            $table->integer('agent_id')->nullable();
            $table->string('contact_name', 2500)->nullable();
            $table->string('contact_position', 2500)->nullable();
            $table->string('contact_phone', 2500)->nullable();
            $table->string('contact_email', 2500)->nullable();
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
        Schema::dropIfExists('std_agent_contact');
    }
}
