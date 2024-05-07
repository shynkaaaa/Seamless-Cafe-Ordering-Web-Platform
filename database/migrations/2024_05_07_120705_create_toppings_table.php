<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('toppings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price');
            $table->timestamps();
        });

        DB::table('toppings')->insert([
            ['name' => 'Карамель', 'price' => 150],
            ['name' => 'Шоколадный Сироп', 'price' => 200],
            ['name' => 'Ванильный Сироп', 'price' => 200],
            ['name' => 'Крем', 'price' => 250],
            ['name' => 'Сахар', 'price' => 50],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toppings');
    }
};
