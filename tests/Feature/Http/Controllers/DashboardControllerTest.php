<?php


use App\Models\MealType;
use Inertia\Testing\Assert;

test('dashboard component is displayed', function () {
    $this->get('/dashboard')->assertInertia(fn(Assert $page) => $page->component('Dashboard'));
});

test('it returns meal types', function () {

    $mealType = MealType::factory()->create();
    $this->get('/dashboard')->assertInertia(
        fn(Assert $page) => $page->component('Dashboard')
            ->has('mealTypes', 1, fn(Assert $page) => $page
                ->where('id', $mealType->id)
                ->where('name', $mealType->name)
                ->where('hour', $mealType->hour)
                ->etc())
    );

});
