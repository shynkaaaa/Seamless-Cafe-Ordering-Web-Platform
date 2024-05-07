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
        Schema::create('drink_sizes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price');
            $table->timestamps();
        });

        DB::table('drink_sizes')->insert([
            ['name' => 'Маленький', 'price' => 0],
            ['name' => 'Средний', 'price' => 50],
            ['name' => 'Большой', 'price' => 100],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drink_sizes');
    }
};
