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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 50);
            $table->string('apellidos', 50);
            $table->char('ci', 11);
            $table->text('cargo_user');
            $table->char('telefono',15);
            $table->char('ext', 10)->nullable();
            $table->string('unidad');
            $table->date('fecha');
            $table->text('desc_requerimiento');
            $table->string('nom_resp');
            $table->text('justificacion');
            $table->date('fecha_vigencia');
            $table->string('nom_jef');
            $table->text('cargo_jef');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};
