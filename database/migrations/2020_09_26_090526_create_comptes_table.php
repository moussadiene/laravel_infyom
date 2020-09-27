<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero');
            $table->string('rib');
            $table->integer('entreprise_id')->unsigned();
            $table->integer('client_id')->unsigned();
            $table->integer('type_compte')->unsigned();
            $table->double('solde');
            $table->double('agios');
            $table->double('fraisOuverture');
            $table->double('remuneration');
            $table->date('dateD');
            $table->date('dateF');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('entreprise_id')->references('id')->on('entreprises');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('type_compte')->references('id')->on('type_comptes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comptes');
    }
}
