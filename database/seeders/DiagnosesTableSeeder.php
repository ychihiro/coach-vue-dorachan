<?php

namespace Database\Seeders;

use App\Models\Diagnosis;
use Illuminate\Database\Seeder;

class DiagnosesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Diagnosis::create(['name' => 'ドラえもん性格診断']);
        Diagnosis::create(['name' => 'アンパンマン性格診断']);
        Diagnosis::create(['name' => 'クレヨンしんちゃん性格診断']);
        Diagnosis::create(['name' => 'ジブリ性格診断']);
        Diagnosis::create(['name' => 'おジャ魔女どれみ性格診断']);
        Diagnosis::create(['name' => 'サザエさん性格診断']);
        Diagnosis::create(['name' => '鬼滅の刃性格診断']);
        Diagnosis::create(['name' => 'とっとこハム太郎性格診断']);
        Diagnosis::create(['name' => '名探偵コナン性格診断']);
        Diagnosis::create(['name' => 'ハリーポッター性格診断']);
    }
}
