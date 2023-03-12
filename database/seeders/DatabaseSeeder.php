<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DiagnosesTableSeeder::class,
            CharactersTableSeeder::class,
            QuestionsTableSeeder::class,
            ChoicesTableSeeder::class,
            ProductsTableSeeder::class,
            UsersTableSeeder::class,
            ]);
    }
}
