<?php

use Illuminate\Database\Seeder;

use App\Feedback;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Feedback::factory()
            ->times(5)
            ->create();
    }
}
