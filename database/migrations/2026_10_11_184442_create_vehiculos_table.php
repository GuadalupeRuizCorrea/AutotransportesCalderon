
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->string('marca');
            $table->string('modelo');
            $table->integer('anio');
            $table->string('placas')->unique();
            $table->integer('capacidad');
            $table->decimal('precio_renta', 10, 2);
            $table->string('estado')->default('Disponible');

            $table->foreignId('categoria_id')
                  ->constrained('categorias')
                  ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};

