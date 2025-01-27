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
        // Burada seeder'ları çağırabilirsiniz
        $this->call([
            CategoriesSeeder::class,
            MoviesSeeder::class,
        ]);
    }
}
