<?php

namespace Database\Seeders;

use App\Models\Character;
use Illuminate\Database\Seeder;

class CharactersTableSeeder extends Seeder
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
            'name' => 'ドラえもん',
            'path' => 'ドラえもん.jpg',
            'description' => '22世紀の猫型ロボット！',
            'cooperation' => 6,
            'extroversion' => 4,
            'sincerity' => 4,
            'openness' => 6,
            'nerve' => 5
        ];
        Character::create($param);
        $param = [
            'diagnosis_id' => 1,
            'name' => 'のび太',
            'path' => 'のび太.jpg',
            'description' => '心優しい怠け者！',
            'cooperation' => 2,
            'extroversion' => 1,
            'sincerity' => 2,
            'openness' => 5,
            'nerve' => 6
        ];
        Character::create($param);
        $param = [
            'diagnosis_id' => 1,
            'name' => 'ドラミちゃん',
            'path' => 'ドラミちゃん.jpg',
            'description' => 'ドラえもんの優秀な妹！',
            'cooperation' => 4,
            'extroversion' => 5,
            'sincerity' => 5,
            'openness' => 2,
            'nerve' => 5
        ];
        Character::create($param);
        $param = [
            'diagnosis_id' => 1,
            'name' => 'しずかちゃん',
            'path' => 'しずかちゃん.jpg',
            'description' => 'しっかり者のヒロイン！',
            'cooperation' => 5,
            'extroversion' => 3,
            'sincerity' => 6,
            'openness' => 1,
            'nerve' => 4
        ];
        Character::create($param);
        $param = [
            'diagnosis_id' => 1,
            'name' => 'ジャイアン',
            'path' => 'ジャイアン.jpg',
            'description' => '歌を愛するガキ大将！',
            'cooperation' => 1,
            'extroversion' => 6,
            'sincerity' => 1,
            'openness' => 3,
            'nerve' => 1
        ];
        Character::create($param);
        $param = [
            'diagnosis_id' => 1,
            'name' => 'スネ夫',
            'path' => 'スネ夫.jpg',
            'description' => '自慢ばかりのナルシスト！',
            'cooperation' => 3,
            'extroversion' => 5,
            'sincerity' => 3,
            'openness' => 4,
            'nerve' => 2
        ];
        Character::create($param);
        $param = [
            'diagnosis_id' => 2,
            'name' => 'アンパンマン',
            'path' => 'ドラえもん.jpg',
            'description' => '優しく面倒見のいいあなたはドラえもんタイプ！困っている人を放っておけず助けてあげちゃうそんなあなたは周囲からも好かれます！一方で繊細で傷つきやすく、悪い評価が気になると落ち込んでしまうことも・・・。クヨクヨと悩みすぎずに気持ちを切り替えてね！',
            'cooperation' => 9,
            'extroversion' => 8,
            'sincerity' => 3,
            'openness' => 6,
            'nerve' => 8
        ];
        Character::create($param);
        $param = [
            'diagnosis_id' => 3,
            'name' => 'ドラえもん',
            'path' => 'ドラえもん.jpg',
            'description' => '優しく面倒見のいいあなたはドラえもんタイプ！困っている人を放っておけず助けてあげちゃうそんなあなたは周囲からも好かれます！一方で繊細で傷つきやすく、悪い評価が気になると落ち込んでしまうことも・・・。クヨクヨと悩みすぎずに気持ちを切り替えてね！',
            'cooperation' => 9,
            'extroversion' => 8,
            'sincerity' => 3,
            'openness' => 6,
            'nerve' => 8
        ];
        Character::create($param);
        $param = [
            'diagnosis_id' => 4,
            'name' => 'ドラえもん',
            'path' => 'ドラえもん.jpg',
            'description' => '優しく面倒見のいいあなたはドラえもんタイプ！困っている人を放っておけず助けてあげちゃうそんなあなたは周囲からも好かれます！一方で繊細で傷つきやすく、悪い評価が気になると落ち込んでしまうことも・・・。クヨクヨと悩みすぎずに気持ちを切り替えてね！',
            'cooperation' => 9,
            'extroversion' => 8,
            'sincerity' => 3,
            'openness' => 6,
            'nerve' => 8
        ];
        Character::create($param);
        $param = [
            'diagnosis_id' => 5,
            'name' => 'ドラえもん',
            'path' => 'ドラえもん.jpg',
            'description' => '優しく面倒見のいいあなたはドラえもんタイプ！困っている人を放っておけず助けてあげちゃうそんなあなたは周囲からも好かれます！一方で繊細で傷つきやすく、悪い評価が気になると落ち込んでしまうことも・・・。クヨクヨと悩みすぎずに気持ちを切り替えてね！',
            'cooperation' => 9,
            'extroversion' => 8,
            'sincerity' => 3,
            'openness' => 6,
            'nerve' => 8
        ];
        Character::create($param);
        $param = [
            'diagnosis_id' => 6,
            'name' => 'ドラえもん',
            'path' => 'ドラえもん.jpg',
            'description' => '優しく面倒見のいいあなたはドラえもんタイプ！困っている人を放っておけず助けてあげちゃうそんなあなたは周囲からも好かれます！一方で繊細で傷つきやすく、悪い評価が気になると落ち込んでしまうことも・・・。クヨクヨと悩みすぎずに気持ちを切り替えてね！',
            'cooperation' => 9,
            'extroversion' => 8,
            'sincerity' => 3,
            'openness' => 6,
            'nerve' => 8
        ];
        Character::create($param);
        $param = [
            'diagnosis_id' => 7,
            'name' => 'ドラえもん',
            'path' => 'ドラえもん.jpg',
            'description' => '優しく面倒見のいいあなたはドラえもんタイプ！困っている人を放っておけず助けてあげちゃうそんなあなたは周囲からも好かれます！一方で繊細で傷つきやすく、悪い評価が気になると落ち込んでしまうことも・・・。クヨクヨと悩みすぎずに気持ちを切り替えてね！',
            'cooperation' => 9,
            'extroversion' => 8,
            'sincerity' => 3,
            'openness' => 6,
            'nerve' => 8
        ];
        Character::create($param);
        $param = [
            'diagnosis_id' => 8,
            'name' => 'ドラえもん',
            'path' => 'ドラえもん.jpg',
            'description' => '優しく面倒見のいいあなたはドラえもんタイプ！困っている人を放っておけず助けてあげちゃうそんなあなたは周囲からも好かれます！一方で繊細で傷つきやすく、悪い評価が気になると落ち込んでしまうことも・・・。クヨクヨと悩みすぎずに気持ちを切り替えてね！',
            'cooperation' => 9,
            'extroversion' => 8,
            'sincerity' => 3,
            'openness' => 6,
            'nerve' => 8
        ];
        Character::create($param);
        $param = [
            'diagnosis_id' => 9,
            'name' => 'ドラえもん',
            'path' => 'ドラえもん.jpg',
            'description' => '優しく面倒見のいいあなたはドラえもんタイプ！困っている人を放っておけず助けてあげちゃうそんなあなたは周囲からも好かれます！一方で繊細で傷つきやすく、悪い評価が気になると落ち込んでしまうことも・・・。クヨクヨと悩みすぎずに気持ちを切り替えてね！',
            'cooperation' => 9,
            'extroversion' => 8,
            'sincerity' => 3,
            'openness' => 6,
            'nerve' => 8
        ];
        Character::create($param);
        $param = [
            'diagnosis_id' => 10,
            'name' => 'ドラえもん',
            'path' => 'ドラえもん.jpg',
            'description' => '優しく面倒見のいいあなたはドラえもんタイプ！困っている人を放っておけず助けてあげちゃうそんなあなたは周囲からも好かれます！一方で繊細で傷つきやすく、悪い評価が気になると落ち込んでしまうことも・・・。クヨクヨと悩みすぎずに気持ちを切り替えてね！',
            'cooperation' => 9,
            'extroversion' => 8,
            'sincerity' => 3,
            'openness' => 6,
            'nerve' => 8
        ];
        Character::create($param);
    }
}
