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
            $table->string('image_url')->nullable();
            $table->timestamps();
        });
        DB::table('coffees')->insert([
            [
                'name' => 'Эспрессо',
                'price' => 600,
                'description' => 'Классический итальянский напиток, приготовленный путем прокачивания горячей воды через обжаренные и измельченные кофейные зерна. Эспрессо обладает богатым ароматом и интенсивным вкусом. Он идеально подходит для тех, кто предпочитает сильный кофейный напиток.',
                'image_url' => 'https://www.pngall.com/wp-content/uploads/4/Cafe-Espresso.png'],
            [
                'name' => 'Американо',
                'price' => 600,
                'description' => 'Напиток, похожий на эспрессо, но с добавлением горячей воды. Это делает его более разбавленным и менее интенсивным по вкусу, чем чистое эспрессо. Американо отлично подходит для любителей более мягкого кофе.',
                'image_url' => 'https://png.pngtree.com/png-vector/20230413/ourmid/pngtree-americano-coffee-beans-transparent-white-background-png-image_6698453.png'],
            [
                'name' => 'Латте',
                'price' => 700,
                'description' => 'Кофейный напиток, приготовленный из эспрессо и горячего молока. Латте обладает нежным вкусом и кремовой текстурой. Он часто подается с молочной пенкой и может быть украшен корицей или шоколадной посыпкой.',
                'image_url' => 'https://static.vecteezy.com/system/resources/previews/009/887/177/non_2x/hot-coffee-latte-cup-free-png.png'],
            [
                'name' => 'Каппучино',
                'price' => 700,
                'description' => 'Еще один популярный кофейный напиток, состоящий из эспрессо, горячего молока и молочной пенки. Каппучино имеет более насыщенный вкус и более пышную текстуру благодаря молочной пенке.',
                'image_url' => 'https://pngimg.com/d/cappuccino_PNG27.png'
            ],
            [
                'name' => 'Моккачино',
                'price' => 800,
                'description' => 'Напиток, похожий на каппучино, но с добавлением шоколадного сиропа или какао порошка. Моккачино обладает богатым шоколадным вкусом и может быть подан с шоколадной посыпкой или кремом на вершине.',
                'image_url' => 'https://static.vecteezy.com/system/resources/previews/036/160/719/original/ai-generated-mocha-by-a-combination-of-espresso-steamed-milk-and-chocolate-with-transparent-background-free-png.png'
            ],
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
