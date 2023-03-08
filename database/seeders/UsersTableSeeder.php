<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'id' => 'DFh5ScxnLBPbenjvAM6tRzYoH0w2',
            'name' => 'のびのび太',
            'email' => 'nobi@nobita.com',
            'password' => 'nobinobita',
        ];
        User::create($param);
        $param = [
            'id' => 'dwpkPBBKYbQoOdUH8nAEWaD6wTY2',
            'name' => '花子',
            'email' => 'hanako@flower.com',
            'password' => 'hanakosan',
        ];
        User::create($param);
        $param = [
            'id' => 'IUktP3N8NfetR61Cczy6',
            'name' => '千尋',
            'email' => 'y.chihiro0510@gmail.com',
            'password' => 'chichichichi',
        ];
        User::create($param);
    }
}
