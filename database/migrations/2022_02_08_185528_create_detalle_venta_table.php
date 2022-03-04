<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ventas', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('id_libro');
            $table->bigInteger('id_venta');
            $table->integer('cantidad');
            $table->decimal('precio', $precision = 8, $scale = 2);

            $table->foreign('id_libro')->references('id')->on('libros');
            $table->foreign('id_venta')->references('id')->on('ventas');

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
        Schema::dropIfExists('detalle_venta');
    }
}
