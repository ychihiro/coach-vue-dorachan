<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'diagnosis_id' => 1,
            'number' => 1,
            'content' => '仕事で困っている人がいたら助けますか？'
        ];
        Question::create($param);
        $param = [
            'diagnosis_id' => 1,
            'number' => 2,
            'content' => '連絡を取る友達は何人くらいいますか？'
        ];
        Question::create($param);
        $param = [
            'diagnosis_id' => 1,
            'number' => 3,
            'content' => '空想にふけることはありますか？'
        ];
        Question::create($param);
        $param = [
            'diagnosis_id' => 1,
            'number' => 4,
            'content' => '先輩から仕事を任されました。あなたはどう思いますか？'
        ];
        Question::create($param);
        $param = [
            'diagnosis_id' => 1,
            'number' => 5,
            'content' => '夏休みが始まりました！一週目の宿題の取り組み方はどれですか？'
        ];
        Question::create($param);
        $param = [
            'diagnosis_id' => 1,
            'number' => 6,
            'content' => '運動会で一番喜ばしいのはどれですか？'
        ];
        Question::create($param);
        $param = [
            'diagnosis_id' => 1,
            'number' => 7,
            'content' => '休みの日はどう過ごしますか？'
        ];
        Question::create($param);
        $param = [
            'diagnosis_id' => 1,
            'number' => 8,
            'content' => '新しいことに挑戦するのは・・・'
        ];
        Question::create($param);
        $param = [
            'diagnosis_id' => 1,
            'number' => 9,
            'content' => '明日から２泊３日の北海道旅行！荷物の準備をします。'
        ];
        Question::create($param);
        $param = [
            'diagnosis_id' => 1,
            'number' => 10,
            'content' => '誰にも言わないでね」と、ある秘密を教えられます。あなたはどうしますか？'
        ];
        Question::create($param);
        $param = [
            'diagnosis_id' => 2,
            'number' => 1,
            'content' => '仕事で困っている人がいたら助けますか？'
        ];
        Question::create($param);
        $param = [
            'diagnosis_id' => 2,
            'number' => 2,
            'content' => '連絡を取る友達は何人くらいいますか？'
        ];
        Question::create($param);
        $param = [
            'diagnosis_id' => 2,
            'number' => 3,
            'content' => '空想にふけることはありますか？'
        ];
        Question::create($param);
        $param = [
            'diagnosis_id' => 2,
            'number' => 4,
            'content' => '先輩から仕事を任されました。あなたはどう思いますか？'
        ];
        Question::create($param);
        $param = [
            'diagnosis_id' => 2,
            'number' => 5,
            'content' => '夏休みが始まりました！一週目の宿題の取り組み方はどれですか？'
        ];
        Question::create($param);
        $param = [
            'diagnosis_id' => 2,
            'number' => 6,
            'content' => '運動会で一番喜ばしいのはどれですか？'
        ];
        Question::create($param);
        $param = [
            'diagnosis_id' => 2,
            'number' => 7,
            'content' => '休みの日はどう過ごしますか？'
        ];
        Question::create($param);
        $param = [
            'diagnosis_id' => 2,
            'number' => 8,
            'content' => '新しいことに挑戦するのは・・・'
        ];
        Question::create($param);
        $param = [
            'diagnosis_id' => 2,
            'number' => 9,
            'content' => '明日から２泊３日の北海道旅行！荷物の準備をします。'
        ];
        Question::create($param);
        $param = [
            'diagnosis_id' => 2,
            'number' => 10,
            'content' => '誰にも言わないでね」と、ある秘密を教えられます。あなたはどうしますか？'
        ];
        Question::create($param);
    }
}
