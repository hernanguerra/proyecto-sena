<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('ProNombre');
            $table->string('ProDescripcion');
            $table->string('ProCantidad');
            $table->string('ProPrecioVenta');
            $table->string('ProCodigo');
            $table->string('ProStop');
            $table->string('ProLow');
            $table->string('ProPrecioCompra');
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
        Schema::dropIfExists('productos');
    }
}
