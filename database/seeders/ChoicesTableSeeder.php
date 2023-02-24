<?php

namespace Database\Seeders;

use App\Models\Choice;
use Illuminate\Database\Seeder;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'question_id' => 1,
            'content' => 'もちろん助ける',
            'category' => 'cooperation',
            'score' => 1,
        ];
        Choice::create($param);
        $param = [
            'question_id' => 1,
            'content' => '余裕があれば助ける',
            'category' => 'cooperation',
            'score' => 0
        ];
        Choice::create($param);
        $param = [
            'question_id' => 1,
            'content' => '助けない',
            'category' => 'cooperation',
            'score' => -1
        ];
        Choice::create($param);
        $param = [
            'question_id' => 2,
            'content' => '３人以下',
            'category' => 'extroversion',
            'score' => -1
        ];
        Choice::create($param);
        $param = [
            'question_id' => 2,
            'content' => '４〜７人',
            'category' => 'extroversion',
            'score' => 0
        ];
        Choice::create($param);
        $param = [
            'question_id' => 2,
            'content' => '8人以上',
            'category' => 'extroversion',
            'score' => 1
        ];
        Choice::create($param);
        $param = [
            'question_id' => 3,
            'content' => 'よくある',
            'category' => 'openness',
            'score' => 1
        ];
        Choice::create($param);
        $param = [
            'question_id' => 3,
            'content' => 'たまにある',
            'category' => 'openness',
            'score' => 0
        ];
        Choice::create($param);
        $param = [
            'question_id' => 3,
            'content' => 'ほとんどない',
            'category' => 'openness',
            'score' => -1
        ];
        Choice::create($param);
        $param = [
            'question_id' => 4,
            'content' => '期待されている気がする',
            'category' => 'nerve',
            'score' => -1
        ];
        Choice::create($param);
        $param = [
            'question_id' => 4,
            'content' => '特に何も思わない',
            'category' => 'nerve',
            'score' => 0
        ];
        Choice::create($param);
        $param = [
            'question_id' => 4,
            'content' => '嫌われてる・・・？',
            'category' => 'nerve',
            'score' => 1
        ];
        Choice::create($param);
        $param = [
            'question_id' => 5,
            'content' => '最初の一週間で宿題ほぼ終わらせます！',
            'category' => 'sincerity',
            'score' => 0
        ];
        Choice::create($param);
        $param = [
            'question_id' => 5,
            'content' => '計画を立ててコツコツやる',
            'category' => 'sincerity',
            'score' => 1
        ];
        Choice::create($param);
        $param = [
            'question_id' => 5,
            'content' => '宿題？そんなの気が向いたときでいい！',
            'category' => 'sincerity',
            'score' => -1
        ];
        Choice::create($param);
        $param = [
            'question_id' => 6,
            'content' => '自分のクラスが優勝した',
            'category' => 'cooperation',
            'score' => 1
        ];
        Choice::create($param);
        $param = [
            'question_id' => 6,
            'content' => '個人種目で一位になった',
            'category' => 'cooperation',
            'score' => 0
        ];
        Choice::create($param);
        $param = [
            'question_id' => 6,
            'content' => 'そういうのあんまり興味ないタイプ',
            'category' => 'cooperation',
            'score' => -1
        ];
        Choice::create($param);
        $param = [
            'question_id' => 7,
            'content' => 'ずっと家でのんびりがいい',
            'category' => 'extroversion',
            'score' => -1
        ];
        Choice::create($param);
        $param = [
            'question_id' => 7,
            'content' => '半々くらい（気分による）',
            'category' => 'extroversion',
            'score' => 0
        ];
        Choice::create($param);
        $param = [
            'question_id' => 7,
            'content' => 'ガッツリ出かけたい',
            'category' => 'extroversion',
            'score' => 1
        ];
        Choice::create($param);
        $param = [
            'question_id' => 8,
            'content' => '大好き！',
            'category' => 'openness',
            'score' => 1
        ];
        Choice::create($param);
        $param = [
            'question_id' => 8,
            'content' => 'してみたいとは思う',
            'category' => 'openness',
            'score' => 0
        ];
        Choice::create($param);
        $param = [
            'question_id' => 8,
            'content' => 'あんまり好きじゃない',
            'category' => 'openness',
            'score' => -1
        ];
        Choice::create($param);
        $param = [
            'question_id' => 9,
            'content' => '荷物は小さめのバッグに必要最低限でいい',
            'category' => 'nerve',
            'score' => -1
        ];
        Choice::create($param);
        $param = [
            'question_id' => 9,
            'content' => 'カバンに入るなら持っていくけど入らない分は諦める',
            'category' => 'nerve',
            'score' => 0
        ];
        Choice::create($param);
        $param = [
            'question_id' => 9,
            'content' => '使うかもしれないものは全て持っていくため荷物は多め',
            'category' => 'nerve',
            'score' => 1
        ];
        Choice::create($param);
        $param = [
            'question_id' => 10,
            'content' => 'ついつい誰かに話しちゃう',
            'category' => 'sincerity',
            'score' => -1
        ];
        Choice::create($param);
        $param = [
            'question_id' => 10,
            'content' => '信用している人には言っちゃうかも',
            'category' => 'sincerity',
            'score' => 0
        ];
        Choice::create($param);
        $param = [
            'question_id' => 10,
            'content' => '絶対言わない',
            'category' => 'sincerity',
            'score' => 1
        ];
        Choice::create($param);
    }
}
