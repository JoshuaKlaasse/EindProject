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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Unieke ID voor elk product
            $table->string('name'); // Naam van het product
            $table->text('description')->nullable(); // Beschrijving van het product
            $table->decimal('price', 8, 2); // Prijs van het product
            $table->integer('stock'); // Aantal producten op voorraad
            $table->timestamps(); // Created_at en updated_at kolommen
            $table->string('image')->nullable(); // URL of pad naar de productafbeelding
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
