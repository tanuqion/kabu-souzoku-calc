<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Stock;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stocks = [
            [
                'code' => '72030',
                'name' => 'トヨタ自動車',
                'kana' => 'トヨタジドウシャ',
                'is_listed' => true,
            ],
            [
                'code' => '26950',
                'name' => 'くら寿司',
                'kana' => 'クラズシ',
                'is_listed' => true,
            ],
            [
                'code' => '29300',
                'name' => '北の達人コーポレーション',
                'kana' => 'キタノタツジンコーポレーション',
                'is_listed' => true,
            ],
            [
                'code' => '460A0',
                'name' => 'ＢＲＡＮＵ',
                'kana' => 'ブラニュー',
                'is_listed' => true,
            ],
            [
                'code' => '67310',
                'name' => 'ピクセラ',
                'kana' => 'ピクセラ',
                'is_listed' => true,
            ],
            [
                'code' => '68610',
                'name' => 'キーエンス',
                'kana' => 'キーエンス',
                'is_listed' => true,
            ],
            [
                'code' => '87250',
                'name' => 'ＭＳ＆ＡＤインシュアランスグループホールディングス',
                'kana' => 'エムエスアンドエーディーインシュアランスグループホールディングス',
                'is_listed' => true,
            ],
            [
                'code' => '62010',
                'name' => '豊田自動織機',
                'kana' => 'トヨタジドウショッキ',
                'is_listed' => false,
            ],
            [
                'code' => '97780',
                'name' => '昴',
                'kana' => 'スバル',
                'is_listed' => true,
            ]
        ];
        
        foreach ($stocks as $stock) {
            Stock::updateOrCreate(
                ['code' => $stock['code']],
                $stock
            );

        }

    }
}
