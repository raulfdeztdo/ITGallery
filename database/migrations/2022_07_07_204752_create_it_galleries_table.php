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
        Schema::create('it_galleries', function (Blueprint $table) {
            $table->mediumIncrements("id");
            $table->string('nombreObra',30);
            $table->string('nombreArtista',30);
            $table->string('foto',100)->nullable();
            $table->integer('anio')->nullable();
            $table->string('nInventario', 12);
            $table->integer('alto');
            $table->integer('ancho');
            $table->integer('profundidad');
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
        Schema::dropIfExists('it_galleries');
    }
};
