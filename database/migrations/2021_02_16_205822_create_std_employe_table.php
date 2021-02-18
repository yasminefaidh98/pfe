<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdEmployeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_employe', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('customer_id')->nullable();
            $table->string('reference', 250)->nullable();
            $table->integer('main_oeuvre_id_auto')->nullable()->index('Personnel_main_oeuvre');
            $table->decimal('prix_base', 10, 3)->nullable();
            $table->string('nom_prenom', 250)->nullable();
            $table->string('prenom', 250)->nullable();
            $table->string('cin', 250)->nullable();
            $table->string('adresse', 250)->nullable();
            $table->string('cnss', 250)->nullable();
            $table->string('sig', 250)->nullable();
            $table->string('telephone', 250)->nullable();
            $table->string('type_paiement', 250)->nullable();
            $table->string('type_contrat', 250)->nullable();
            $table->string('identifiant', 250)->nullable();
            $table->string('mot_passe', 250)->nullable();
            $table->tinyInteger('acces_rederp')->nullable();
            $table->string('mobile', 250)->nullable();
            $table->string('fax', 250)->nullable();
            $table->string('email', 250)->nullable();
            $table->string('photo', 250)->nullable();
            $table->string('signature', 250)->nullable();
            $table->decimal('conges_jours', 10)->nullable();
            $table->decimal('conges_restant', 10)->nullable();
            $table->string('fonction', 2500)->nullable();
            $table->integer('user_id')->nullable();
            $table->string('sexe', 250)->nullable();
            $table->tinyInteger('deleted')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_employe');
    }
}
