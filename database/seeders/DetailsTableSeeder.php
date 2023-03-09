<?php

namespace Database\Seeders;

use App\Models\Detail;
use Illuminate\Database\Seeder;

class DetailsTableSeeder extends Seeder
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
            'product_id' => 3,
            'purchase_id' => 2,
            'count' => 1
        ];
        Detail::create($param);
        $param = [
            'user_id' => 'DFh5ScxnLBPbenjvAM6tRzYoH0w2',
            'product_id' => 4,
            'purchase_id' => 2,
            'count' => 4
        ];
        Detail::create($param);
        $param = [
            'user_id' => 'dwpkPBBKYbQoOdUH8nAEWaD6wTY2',
            'product_id' => 1,
            'purchase_id' => 3,
            'count' => 3
        ];
        Detail::create($param);
    }
}
