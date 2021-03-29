<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Personne extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personne', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_prenom');
            $table->string('order');
            $table->timestamps(false);

            $table->foreign('id_parent')
                ->constrained('personne')
                ->nullable()
                ->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personne');
    }
}
