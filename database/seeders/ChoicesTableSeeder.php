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
            'item' => 'cooperation',
            'score' => 3,
        ];
        Choice::create($param);
        $param = [
            'question_id' => 1,
            'content' => '余裕があれば助ける',
            'item' => 'cooperation',
            'score' => 2
        ];
        Choice::create($param);
        $param = [
            'question_id' => 1,
            'content' => '助けない',
            'item' => 'cooperation',
            'score' => 1
        ];
        Choice::create($param);
        $param = [
            'question_id' => 2,
            'content' => '３人以下',
            'item' => 'extroversion',
            'score' => 1
        ];
        Choice::create($param);
        $param = [
            'question_id' => 2,
            'content' => '４〜７人',
            'item' => 'extroversion',
            'score' => 2
        ];
        Choice::create($param);
        $param = [
            'question_id' => 2,
            'content' => '8人以上',
            'item' => 'extroversion',
            'score' => 3
        ];
        Choice::create($param);
        $param = [
            'question_id' => 3,
            'content' => 'よくある',
            'item' => 'openness',
            'score' => 3
        ];
        Choice::create($param);
        $param = [
            'question_id' => 3,
            'content' => 'たまにある',
            'item' => 'openness',
            'score' => 2
        ];
        Choice::create($param);
        $param = [
            'question_id' => 3,
            'content' => 'ほとんどない',
            'item' => 'openness',
            'score' => 1
        ];
        Choice::create($param);
        $param = [
            'question_id' => 4,
            'content' => '期待されている気がする',
            'item' => 'nerve',
            'score' => 1
        ];
        Choice::create($param);
        $param = [
            'question_id' => 4,
            'content' => '特に何も思わない',
            'item' => 'nerve',
            'score' => 2
        ];
        Choice::create($param);
        $param = [
            'question_id' => 4,
            'content' => '嫌われてる・・・？',
            'item' => 'nerve',
            'score' => 3
        ];
        Choice::create($param);
        $param = [
            'question_id' => 5,
            'content' => '最初の一週間で宿題ほぼ終わらせます！',
            'item' => 'sincerity',
            'score' => 2
        ];
        Choice::create($param);
        $param = [
            'question_id' => 5,
            'content' => '計画を立ててコツコツやる',
            'item' => 'sincerity',
            'score' => 3
        ];
        Choice::create($param);
        $param = [
            'question_id' => 5,
            'content' => '宿題？そんなの気が向いたときでいい！',
            'item' => 'sincerity',
            'score' => 1
        ];
        Choice::create($param);
        $param = [
            'question_id' => 6,
            'content' => '自分のクラスが優勝した',
            'item' => 'cooperation',
            'score' => 3
        ];
        Choice::create($param);
        $param = [
            'question_id' => 6,
            'content' => '個人種目で一位になった',
            'item' => 'cooperation',
            'score' => 2
        ];
        Choice::create($param);
        $param = [
            'question_id' => 6,
            'content' => 'そういうのあんまり興味ないタイプ',
            'item' => 'cooperation',
            'score' => 1
        ];
        Choice::create($param);
        $param = [
            'question_id' => 7,
            'content' => 'ずっと家でのんびりがいい',
            'item' => 'extroversion',
            'score' => 1
        ];
        Choice::create($param);
        $param = [
            'question_id' => 7,
            'content' => '半々くらい（気分による）',
            'item' => 'extroversion',
            'score' => 2
        ];
        Choice::create($param);
        $param = [
            'question_id' => 7,
            'content' => 'ガッツリ出かけたい',
            'item' => 'extroversion',
            'score' => 3
        ];
        Choice::create($param);
        $param = [
            'question_id' => 8,
            'content' => '大好き！',
            'item' => 'openness',
            'score' => 3
        ];
        Choice::create($param);
        $param = [
            'question_id' => 8,
            'content' => 'してみたいとは思う',
            'item' => 'openness',
            'score' => 2
        ];
        Choice::create($param);
        $param = [
            'question_id' => 8,
            'content' => 'あんまり好きじゃない',
            'item' => 'openness',
            'score' => 1
        ];
        Choice::create($param);
        $param = [
            'question_id' => 9,
            'content' => '足りなくてもなんとかなるし小さめのバッグに必要最低限でいいでしょ',
            'item' => 'nerve',
            'score' => 1
        ];
        Choice::create($param);
        $param = [
            'question_id' => 9,
            'content' => 'カバンに入る分は持っていくけど使うかわからないものは置いていく',
            'item' => 'nerve',
            'score' => 2
        ];
        Choice::create($param);
        $param = [
            'question_id' => 9,
            'content' => '使うかもしれないと思うものは全て持っていくためいつも荷物は多め',
            'item' => 'nerve',
            'score' => 3
        ];
        Choice::create($param);
        $param = [
            'question_id' => 10,
            'content' => 'すぐ誰かに話しちゃうと思う',
            'item' => 'sincerity',
            'score' => 1
        ];
        Choice::create($param);
        $param = [
            'question_id' => 10,
            'content' => '我慢するけど信用している人には言っちゃうかも。でも話たことに罪悪感はあるから「これ誰にも言わないで」と言う。',
            'item' => 'sincerity',
            'score' => 2
        ];
        Choice::create($param);
        $param = [
            'question_id' => 10,
            'content' => '誰かに話したいけど言わない',
            'item' => 'sincerity',
            'score' => 3
        ];
        Choice::create($param);
    }
}
