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
            $table->text('imagen');
            $table->string('nombre');
            $table->string('zona');
            $table->string('posicion');
            $table->string('lugar');
            $table->date('f_inicio');
            $table->date('f_final');
            // $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('publicidad');
    }
}