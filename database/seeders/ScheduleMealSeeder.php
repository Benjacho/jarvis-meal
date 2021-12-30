<?php

namespace Database\Seeders;

use App\Models\ScheduleMeal;
use Illuminate\Database\Seeder;

class ScheduleMealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ScheduleMeal::create([
            'name' => 'Breakfast',
            'hour' => '07:30',
        ]);

        ScheduleMeal::create([
            'name' => 'Mid-Morning',
            'hour' => '10:30',
        ]);

        ScheduleMeal::create([
            'name' => 'Lunch',
            'hour' => '13:30',
        ]);

        ScheduleMeal::create([
            'name' => 'Mid-Afternoon',
            'hour' => '16:30',
        ]);

        ScheduleMeal::create([
            'name' => 'Dinner',
            'hour' => '19:30',
        ]);
    }
}
