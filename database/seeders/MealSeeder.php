<?php

namespace Database\Seeders;

use App\Models\Meal;
use Illuminate\Database\Seeder;

class MealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Meal::query()->create(
            [
                'name' => '1 taza de avena con arándanos sin azúcar'
            ]
        );

        Meal::query()->create(
            [
                'name' => '1 pan de molde integral'
            ]
        );

        Meal::query()->create(
            [
                'name' => 'omelette 2 claras de huevo y 1 yema'
            ]
        );

        Meal::query()->create(
            [
                'name' => '1 taza lentejas'
            ]
        );

        Meal::query()->create(
            [
                'name' => '130g pollo pechuga sancochada'
            ]
        );

        Meal::query()->create(
            [
                'name' => '½ plato de ensalada de verduras frescas (tomate, lechuga, cebolla, pepino, ¼ palta)'
            ]
        );
    }
}
