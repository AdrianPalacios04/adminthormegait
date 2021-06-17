<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicidad', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->text('imagen');
            $table->string('link',100);
            $table->date('f_final');
            $table->string('posicion');
            $table->date('f_inicio');
            $table->string('opciones');
            // $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('publicidad');
    }
}