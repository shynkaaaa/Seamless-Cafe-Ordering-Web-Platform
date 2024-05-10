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
            $table->string('image_url')->nullable();
            $table->timestamps();
        });

        DB::table('toppings')->insert([
            ['name' => 'Карамель', 'price' => 150, 'image_url' => 'https://www.senzaalcoolshop.it/media/catalog/product/cache/4a5cf70630b9c3080e492221e54d9a9f/o/d/odk-syrup-barista-caramel.png'],
            ['name' => 'Шоколадный Сироп', 'price' => 200, 'image_url' => 'https://www.alkoholfrittshop.se/media/catalog/product/cache/4a5cf70630b9c3080e492221e54d9a9f/o/d/odk-syrup-barista-chocolate.png'],
            ['name' => 'Ванильный Сироп', 'price' => 200, 'image_url' => 'https://odkmixers.co.uk/wp-content/uploads/2016/11/Vanilla-Syrup.png'],
            ['name' => 'Крем', 'price' => 250, 'image_url' => 'https://www.mehadrin.com/wp-content/uploads/2021/09/Whipped-Cream.png'],
            ['name' => 'Сахар', 'price' => 50, 'image_url' => 'https://www.freepnglogos.com/uploads/sugar-png/sugar-march-happily-ever-kate-13.png'],
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
