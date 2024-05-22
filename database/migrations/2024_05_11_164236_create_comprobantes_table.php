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
        Schema::create('comprobantes', function (Blueprint $table) {
            $table->id();
            $table->string('fecha_emision');
            $table->string('fecha_pago',8);

            $table->unsignedBigInteger('tipo_comprobante_id')->unique();
            $table->foreign('tipo_comprobante_id')
                ->references('id')
                ->on('tipo_comprobantes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('pago_id')->unique();
            $table->foreign('pago_id')
                ->references('id')
                ->on('pagos')
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
        Schema::dropIfExists('comprobantes');
    }
};
