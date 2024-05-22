<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detalle_pagos', function (Blueprint $table) {
            $table->id('id');
            $table->foreign('id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('cantidad');
            $table->string('penalidad',8);
            $table->string('descuento',12);
            $table->string('igv');
            $table->string('subtotal');
            $table->string('total');

            $table->unsignedBigInteger('contrato_id')->unique();
            $table->foreign('contrato_id')
                ->references('id')
                ->on('contratos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_pagos');
    }
};
