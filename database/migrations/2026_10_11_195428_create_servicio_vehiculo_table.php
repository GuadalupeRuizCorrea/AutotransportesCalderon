
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('servicio_vehiculo', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('vehiculo_id');
            $table->foreign('vehiculo_id')
                  ->references('id')
                  ->on('vehiculos')
                  ->onDelete('cascade');

            $table->unsignedBigInteger('servicio_id');
            $table->foreign('servicio_id')
                  ->references('id')
                  ->on('servicios')
                  ->onDelete('cascade');

            $table->unique(['vehiculo_id', 'servicio_id']);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('servicio_vehiculo');
    }
};

