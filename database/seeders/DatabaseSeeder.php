<?php

namespace Database\Seeders;

use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        $admin = User::create([
            'name' => 'Benjamin',
            'email' => 'christianbfc97@gmail.com',
            'password' => bcrypt('password')
        ]);

        $this->call(ScheduleMealSeeder::class);
    }
}
