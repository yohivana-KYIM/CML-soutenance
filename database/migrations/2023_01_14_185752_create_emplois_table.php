<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emplois', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom_emploi')->nullable();
            $table->date('date_debut');
           $table->date('date_fin');
            $table->timestamps();

            $table->foreignId('equipe_id')->nullable()->constrained('equipes');

            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('legende_id')->nullable()->constrained('legendes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emplois');
    }
};
