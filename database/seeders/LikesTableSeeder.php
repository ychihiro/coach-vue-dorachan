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
            'user_id' => '66BcM8YsDmXuSjq8Cr8h33Q9kNI2',
            'diagnosis_id' => 1
        ];
        Like::create($param);
        $param = [
            'user_id' => '66BcM8YsDmXuSjq8Cr8h33Q9kNI2',
            'diagnosis_id' => 2
        ];
        Like::create($param);
        $param = [
            'user_id' => 'Skx66VzwPFeejSkqLNlRLJDcrzI2',
            'diagnosis_id' => 3
        ];
        Like::create($param);
    }
}
