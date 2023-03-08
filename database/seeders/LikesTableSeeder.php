<?php

namespace Database\Seeders;

use App\Models\Like;
use Illuminate\Database\Seeder;

class LikesTableSeeder extends Seeder
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
            'diagnosis_id' => 1
        ];
        Like::create($param);
        $param = [
            'user_id' => 'dwpkPBBKYbQoOdUH8nAEWaD6wTY2',
            'diagnosis_id' => 3
        ];
        Like::create($param);
    }
}
