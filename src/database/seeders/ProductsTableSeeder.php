<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => '腕時計',
                'brand' => 'Rolax',
                'description' => 'スタイリッシュなデザインのメンズ腕時計',
                'price' => 15000,
                'image' => 'Watch.jpg',
                'category' => '',
                'condition' => '良好',
            ],
            [
                'name' => 'HDD',
                'brand' => '西芝',
                'description' => '高速で信頼性の高いハードディスク',
                'price' => 5000,
                'image' => 'HDD.jpg',
                'category' => '',
                'condition' => '目立った傷や汚れなし',
            ],
            [
                'name' => '玉ねぎ3束',
                'brand' => 'なし',
                'description' => '新鮮な玉ねぎ3束のセット',
                'price' => 300,
                'image' => 'Onion.jpg',
                'category' => '',
                'condition' => 'やや傷や汚れあり',
            ],
            [
                'name' => '革靴',
                'brand' => '',
                'description' => 'クラシックなデザインの革靴',
                'price' => 4000,
                'image' => 'LeatherShoes.jpg',
                'category' => '',
                'condition' => '状態が悪い',
            ],
            [
                'name' => 'ノートPC',
                'brand' => '',
                'description' => '高性能なノートパソコン',
                'price' => 45000,
                'image' => 'Laptop.jpg',
                'category' => '',
                'condition' => '良好',
            ],
            [
                'name' => 'マイク',
                'brand' => 'なし',
                'description' => '高音質のレコーディング用マイク',
                'price' => 8000,
                'image' => 'Mike.jpg',
                'category' => '',
                'condition' => '目立った傷や汚れなし',
            ],
            [
                'name' => 'ショルダーバッグ',
                'brand' => '',
                'description' => 'おしゃれなショルダーバッグ',
                'price' => 3500,
                'image' => 'ShoulderBag.jpg',
                'category' => '',
                'condition' => 'やや傷や汚れあり',
            ],
            [
                'name' => 'タンブラー',
                'brand' => 'なし',
                'description' => '使いやすいタンブラー',
                'price' => 500,
                'image' => 'Tumbler.jpg',
                'category' => '',
                'condition' => '状態が悪い',
            ],
            [
                'name' => 'コーヒーミル',
                'brand' => 'Starbacks',
                'description' => '手動のコーヒーミル',
                'price' => 4000,
                'image' => 'CoffeeMill.jpg',
                'category' => '',
                'condition' => '良好',
            ],
            [
                'name' => 'メイクセット',
                'brand' => '',
                'description' => '便利なメイクアップセット',
                'price' => 2500,
                'image' => 'MakeupSet.jpg',
                'category' => '',
                'condition' => '目立った傷や汚れなし',
            ],
        ]);
    }
}
