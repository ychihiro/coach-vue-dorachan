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
        // \App\Models\User::factory(1)->create();
        $this->call([
            DiagnosesTableSeeder::class,
            CharactersTableSeeder::class,
            QuestionsTableSeeder::class,
            ChoicesTableSeeder::class,
            ProductsTableSeeder::class,
            UsersTableSeeder::class,
            PurchasesTableSeeder::class,
            // DetailsTableSeeder::class,
            // CartsTableSeeder::class,
            ResultsTableSeeder::class,
            LikesTableSeeder::class
            ]);
    }
}
