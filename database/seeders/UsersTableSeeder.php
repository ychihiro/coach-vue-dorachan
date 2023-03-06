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
            'id' => 'S2B24W0iPnWLSV2H7k7wDn6Ru5G2',
            'name' => '管理者',
            'email' => 'rgleason@example.net',
            'password' => 'addminuser',
            'role' => 1
        ];
        User::create($param);
    }
}
