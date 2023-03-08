<?php

namespace Database\Seeders;

use App\Models\Result;
use Illuminate\Database\Seeder;

class ResultsTableSeeder extends Seeder
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
            'diagnosis_id' => 1,
            'character_id' => 1
        ];
        Result::create($param);
        $param = [
            'user_id' => 'DFh5ScxnLBPbenjvAM6tRzYoH0w2',
            'diagnosis_id' => 1,
            'character_id' => 3
        ];
        Result::create($param);
        $param = [
            'user_id' => 'dwpkPBBKYbQoOdUH8nAEWaD6wTY2',
            'diagnosis_id' => 1,
            'character_id' => 2
        ];
        Result::create($param);
    }
}
