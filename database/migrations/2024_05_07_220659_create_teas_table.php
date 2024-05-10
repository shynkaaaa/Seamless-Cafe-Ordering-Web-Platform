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
        Schema::create('teas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price');
            $table->string('description', 1000);
            $table->string('image_url')->nullable();
            $table->timestamps();
        });
        DB::table('teas')->insert([
                [
                    'name' => 'Чёрный чай',
                    'price' => 300,
                    'description' => 'Черный чай - классический напиток, обладающий насыщенным вкусом и ароматом. Идеально подходит для утреннего начала дня или вечернего отдыха.',
                    'image_url' => 'https://static.vecteezy.com/system/resources/previews/037/280/520/non_2x/ai-generated-black-tea-held-in-a-glass-isolated-on-transparent-background-free-png.png'
                ],
                [
                    'name' => 'Зёленый чай',
                    'price' => 350,
                    'description' => 'Зеленый чай - легкий и освежающий напиток с нежным вкусом и ароматом. Известен своими полезными свойствами и антиоксидантным действием.',
                    'image_url' => 'https://png.pngtree.com/png-clipart/20210613/original/pngtree-green-tea-cup-drink-tea-png-image_6403591.jpg'
                ],
                [
                    'name' => 'Белый чай',
                    'price' => 400,
                    'description' => 'Белый чай - деликатный и нежный напиток, получаемый из молодых почек чайного куста. Обладает сладковатым вкусом и легким ароматом.',
                    'image_url' => 'https://freepngimg.com/save/30467-tea/2562x1859'
                ],
                [
                    'name' => 'Улун',
                    'price' => 450,
                    'description' => 'Улун - полуокисленный чай, имеющий сложный вкус и аромат с нотками фруктов и цветов. Отлично подходит для ценителей утонченных вкусов.',
                    'image_url' => 'https://www.tealeaves.com/cdn/shop/products/W3072_loose_800x.png?v=1669229138'
                ],
                [
                    'name' => 'Пуэр',
                    'price' => 500,
                    'description' => 'Пуэр - ферментированный чай, имеющий насыщенный вкус и аромат с землистыми и древесными нотками. Известен своими целебными свойствами и способностью улучшать пищеварение.',
                    'image_url' => 'https://zeltea.ru/upload/iblock/2f7/2f7e5fc31bcb3716bc3806487d5c3a9a.png'
                ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teas');
    }
};
