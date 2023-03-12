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
            'id' => 'NuoKmoaXlJQsx1EH6YZPxHfnR5t1',
            'name' => '診断作成者',
            'email' => 'create@diagnosis.com',
            'password' => 'creatediagnosis',
        ];
        User::create($param);
        $param = [
            'id' => 'Y5Dq1ClyJkegx5HICNSlvORMvTB3',
            'name' => '管理者',
            'email' => 'addmin@user.com',
            'password' => 'addminuser',
        ];
        User::create($param);
    }
}
