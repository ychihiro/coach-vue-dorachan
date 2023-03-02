<?php

namespace Database\Seeders;

use App\Models\Product;
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
        $param = [
            'diagnosis_id' => 1,
            'name' => 'ドラえもんステッカー',
            'price' => 500,
            'path' => 'images/ドラえもん.jpg',
        ];
        Product::create($param);
        $param = [
            'diagnosis_id' => 1,
            'name' => 'のび太ステッカー',
            'price' => 500,
            'path' => 'images/のび太.jpg',
        ];
        Product::create($param);
        $param = [
            'diagnosis_id' => 1,
            'name' => 'ドラミちゃんステッカー',
            'price' => 500,
            'path' => 'images/ドラミちゃん.jpg',
        ];
        Product::create($param);
        $param = [
            'diagnosis_id' => 1,
            'name' => 'しずかちゃんステッカー',
            'price' => 500,
            'path' => 'images/しずかちゃん.jpg',
        ];
        Product::create($param);
        $param = [
            'diagnosis_id' => 1,
            'name' => 'ジャイアンステッカー',
            'price' => 500,
            'path' => 'images/ジャイアン.jpg',
        ];
        Product::create($param);
        $param = [
            'diagnosis_id' => 1,
            'name' => 'スネ夫ステッカー',
            'price' => 500,
            'path' => 'images/スネ夫.jpg',
        ];
        Product::create($param);
        $param = [
            'diagnosis_id' => 2,
            'name' => 'スネ夫ステッカー',
            'price' => 500,
            'path' => 'images/スネ夫.jpg',
        ];
        Product::create($param);
    }
}
