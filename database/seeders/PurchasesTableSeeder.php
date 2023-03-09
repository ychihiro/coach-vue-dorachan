<?php

namespace Database\Seeders;

use App\Models\Purchase;
use Illuminate\Database\Seeder;

class PurchasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            // 'user_id' => 'DFh5ScxnLBPbenjvAM6tRzYoH0w2',
            'fullname' => 'のびのび太',
            'postcode' => 1790076,
            'prefecture' => '東京都',
            'city' => '練馬区月見台すすきが原',
            'building_name' => '3-10-5',
            'delivery_date' => '2023-03-08',
            'delivery_time' => '08:22:27',
        ];
        Purchase::create($param);
        $param = [
            // 'user_id' => 'dwpkPBBKYbQoOdUH8nAEWaD6wTY2',
            'fullname' => '花野花子',
            'postcode' => 1790076,
            'prefecture' => '東京都',
            'city' => '練馬区月見台すすきが原',
            'building_name' => '3-10-5',
            'delivery_date' => '2023-03-08',
            'delivery_time' => '08:22:27',
        ];
        Purchase::create($param);
        $param = [
            // 'user_id' => 'IUktP3N8NfetR61Cczy6',
            'fullname' => '千尋',
            'postcode' => 1790076,
            'prefecture' => '東京都',
            'city' => '練馬区月見台すすきが原',
            'building_name' => '3-10-5',
            'delivery_date' => '2023-03-09',
            'delivery_time' => '08:22:27',
        ];
        Purchase::create($param);
    }
}
