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
        Schema::table('emplois', function (Blueprint $table) {
            $table->dropForeign('emplois_equipe_id_foreign');
            $table->dropForeign('emplois_user_id_foreign');
            $table->dropForeign('emplois_legende_id_foreign');
            $table->foreign('equipe_id')->on('equipes')->references('id')->cascadeOnDelete();
            $table->foreign('user_id')->on('users')->references('id')->cascadeOnDelete();
            $table->foreign('legende_id')->on('legendes')->references('id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emplois', function (Blueprint $table) {
            $table->dropForeign('emplois_equipe_id_foreign');
            $table->dropForeign('emplois_user_id_foreign');
            $table->dropForeign('emplois_legende_id_foreign');
            $table->foreign('equipe_id')->on('equipes')->references('id');
            $table->foreign('user_id')->on('users')->references('id');
            $table->foreign('legende_id')->on('legendes')->references('id');
        });
    }
};
