<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_document', function (Blueprint $table) {
            $table->integer('id_auto', true);
            $table->integer('customer_id')->nullable();
            $table->string('document_type', 250)->nullable();
            $table->string('document_reference', 250)->nullable()->index('document_reference');
            $table->date('document_dateajout')->nullable();
            $table->integer('agent_id')->nullable();
            $table->integer('depot_id')->nullable();
            $table->string('document_reference_document', 250)->nullable();
            $table->text('document_remarques')->nullable();
            $table->tinyInteger('document_tf')->nullable()->default(1);
            $table->tinyInteger('document_rs')->nullable();
            $table->integer('document_transfert_bl')->nullable();
            $table->tinyInteger('document_fodec')->nullable()->default(0);
            $table->string('document_validation', 250)->nullable();
            $table->decimal('document_montantht', 10, 3)->nullable();
            $table->decimal('document_montantht_nofodec', 10, 3)->nullable();
            $table->decimal('document_total_tva', 10, 3)->nullable();
            $table->decimal('document_total_rs', 10, 3)->nullable();
            $table->decimal('document_total_fodec', 10, 3)->nullable();
            $table->decimal('document_total_tf', 10, 3)->nullable();
            $table->decimal('document_netpayer', 10, 3)->nullable();
            $table->integer('journal_ecriture_id')->nullable();
            $table->string('document_exercice', 250)->nullable();
            $table->string('document_livraison', 250)->nullable();
            $table->integer('logistique_id')->nullable();
            $table->dateTime('document_livraisondate')->nullable()->useCurrent();
            $table->tinyInteger('document_comptabilite')->nullable();
            $table->string('etat_doc_01', 250)->nullable();
            $table->string('etat_doc_02', 250)->nullable();
            $table->string('etat_doc_03', 250)->nullable();
            $table->string('etat_doc_04', 250)->nullable();
            $table->string('etat_doc_05', 250)->nullable();
            $table->integer('document_user_id')->nullable();
            $table->text('document_commentaire')->nullable();
            $table->string('document_user_name', 250)->nullable();
            $table->decimal('reglement_total', 10, 3)->nullable();
            $table->decimal('reglement_reste', 10, 3)->nullable();
            $table->dateTime('ticket_dateheure')->nullable();
            $table->string('doc_agent_raisonsocial', 250)->nullable();
            $table->string('doc_agent_mf', 250)->nullable();
            $table->string('doc_agent_adresse', 250)->nullable();
            $table->string('doc_agent_telephone', 250)->nullable();
            $table->decimal('document_total_remise', 10, 3)->nullable();
            $table->decimal('document_total_ht', 10, 3)->nullable();
            $table->integer('document_livraison_done')->nullable()->default(0);
            $table->integer('deleted')->nullable()->default(0);
            $table->integer('document_dc')->nullable();
            $table->decimal('document_dc_value', 10, 3)->nullable();
            $table->string('document_type_id', 250)->nullable();
            $table->string('document_status', 250)->nullable();
            $table->integer('document_close')->nullable()->default(0);
            $table->integer('document_transfer_to')->default(0);
            $table->integer('pos_session_id');
            $table->string('pos_user_id', 250)->nullable();
            $table->string('remise_type', 250)->nullable();
            $table->string('remise_for', 250)->nullable();
            $table->decimal('remise_valeur', 10, 3)->nullable();
            $table->string('pos', 250)->nullable();
            $table->string('caisse_id')->nullable();
            $table->string('espace_id')->nullable();
            $table->string('table_id')->nullable();
            $table->string('document_devise', 250)->nullable()->default('0');
            $table->decimal('tot_recu', 10, 3)->nullable();
            $table->integer('paiment_method')->nullable();
            $table->index(['customer_id', 'depot_id', 'agent_id', 'deleted', 'pos', 'caisse_id', 'espace_id', 'table_id'], 'INDEXOPT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_document');
    }
}
