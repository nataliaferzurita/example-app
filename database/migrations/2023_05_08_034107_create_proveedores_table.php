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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->string('cuit_proveedor',11);
            $table->string('razonSocial_proveedor',50);
            $table->string('nombreFantasia_proveedor',50);
            $table->string('codigoPostal_proveedor',10);
            $table->string('direccion_proveedor',100);
            $table->string('telefono_proveedor',100);
            $table->boolean('visible_proveedor',true);
            $table->string('_token');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
