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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->integer('num_identificacion');
            $table->String('nombres',40);
            $table->String('apellidos',40);
            $table->String('rol');
            $table->integer('edad');
            $table->String('tipo_atencion');
            $table->string('profecinal');
            $table->String('dia_disponible');
            $table->String('hora_disponible');
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
        Schema::dropIfExists('citas');
    }
};
