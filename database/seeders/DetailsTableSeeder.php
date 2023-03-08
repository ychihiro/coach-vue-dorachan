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
            'product_id' => 1,
            'purchase_id' => 1,
            'count' => 5
        ];
        Detail::create($param);
        $param = [
            'product_id' => 2,
            'purchase_id' => 2,
            'count' => 4
        ];
        Detail::create($param);
    }
}
