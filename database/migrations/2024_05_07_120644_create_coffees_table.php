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
        Schema::create('coffees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price');
            $table->string('description', 1000);
            $table->timestamps();
        });
        DB::table('coffees')->insert([
            ['name' => 'Эспрессо', 'price' => 500, 'description' => 'Классический итальянский напиток, приготовленный путем прокачивания горячей воды через обжаренные и измельченные кофейные зерна. Эспрессо обладает богатым ароматом и интенсивным вкусом. Он идеально подходит для тех, кто предпочитает сильный кофейный напиток.'],
            ['name' => 'Американо', 'price' => 600, 'description' => 'Напиток, похожий на эспрессо, но с добавлением горячей воды. Это делает его более разбавленным и менее интенсивным по вкусу, чем чистое эспрессо. Американо отлично подходит для любителей более мягкого кофе.'],
            ['name' => 'Латте', 'price' => 700, 'description' => 'Кофейный напиток, приготовленный из эспрессо и горячего молока. Латте обладает нежным вкусом и кремовой текстурой. Он часто подается с молочной пенкой и может быть украшен корицей или шоколадной посыпкой.'],
            ['name' => 'Каппучино', 'price' => 700, 'description' => 'Еще один популярный кофейный напиток, состоящий из эспрессо, горячего молока и молочной пенки. Каппучино имеет более насыщенный вкус и более пышную текстуру благодаря молочной пенке.'],
            ['name' => 'Моккачино', 'price' => 800, 'description' => 'Напиток, похожий на каппучино, но с добавлением шоколадного сиропа или какао порошка. Моккачино обладает богатым шоколадным вкусом и может быть подан с шоколадной посыпкой или кремом на вершине.'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coffees');
    }
};
