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
            $table->timestamps();
        });
        DB::table('teas')->insert([
                [
                    'name' => 'Черный чай',
                    'price' => 300,
                    'description' => 'Черный чай - классический напиток, обладающий насыщенным вкусом и ароматом. Идеально подходит для утреннего начала дня или вечернего отдыха.',
                ],
                [
                    'name' => 'Зеленый чай',
                    'price' => 350,
                    'description' => 'Зеленый чай - легкий и освежающий напиток с нежным вкусом и ароматом. Известен своими полезными свойствами и антиоксидантным действием.',
                ],
                [
                    'name' => 'Белый чай',
                    'price' => 400,
                    'description' => 'Белый чай - деликатный и нежный напиток, получаемый из молодых почек чайного куста. Обладает сладковатым вкусом и легким ароматом.',
                ],
                [
                    'name' => 'Улун',
                    'price' => 450,
                    'description' => 'Улун - полуокисленный чай, имеющий сложный вкус и аромат с нотками фруктов и цветов. Отлично подходит для ценителей утонченных вкусов.',
                ],
                [
                    'name' => 'Пуэр',
                    'price' => 500,
                    'description' => 'Пуэр - ферментированный чай, имеющий насыщенный вкус и аромат с землистыми и древесными нотками. Известен своими целебными свойствами и способностью улучшать пищеварение.',
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
