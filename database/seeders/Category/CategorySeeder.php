<?php

namespace Database\Seeders\Category;

use App\Domain\Category\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Криминал',
            'Пожары',
            'Культура',
            'Происшествия',
            'Официально',
            'Погода',
            'Спорт',
            'Люди',
            'Стихия',
            'ДТП',
            'Интервью',
            'Тесты и опросы',
            'Транспорт',
            'Королева',
            'Общество',
            '"Летайте самолётами, а не поездами!"',
            'Королева недели',
            'Давайте обсудим',
            'Женский клуб',
            'Экология',
            'Личный опыт',
            'Фоторепортажи',
            'Власть',
            'Новости партнёров',
            'Гороскоп',
            'Поможем разобраться',
            'Деньги',
            'Животные',
            'Город'
        ];

        foreach ($categories as $category) {
            Category::factory([
                'name' => $category,
                'is_active' => true,
            ])->create();
        }
    }
}
