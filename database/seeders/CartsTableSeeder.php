<?php

namespace Database\Seeders;

use App\Models\Cart;
use Illuminate\Database\Seeder;

class CartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 'DFh5ScxnLBPbenjvAM6tRzYoH0w2',
            'product_id' => 2,
            'count' => 3
        ];
        Cart::create($param);
        $param = [
            'user_id' => 'DFh5ScxnLBPbenjvAM6tRzYoH0w2',
            'product_id' => 1,
            'count' => 4
        ];
        Cart::create($param);
        $param = [
            'user_id' => 'dwpkPBBKYbQoOdUH8nAEWaD6wTY2',
            'product_id' => 3,
            'count' => 1
        ];
        Cart::create($param);
    }
}