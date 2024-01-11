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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->string('id_venta');
            $table->foreignId('clientes_id')->constrained('clientes');
            $table->foreignId('trabajadors_id')->constrained('trabajadors');
            $table->date('fecha');
            $table->integer('tipo_comprobante');
            $table->integer('serie');
            $table->string('correlativo');
            $table->string('igv');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
