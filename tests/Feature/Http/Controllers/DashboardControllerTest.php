<?php


use App\Models\ScheduleMeal;
use Inertia\Testing\Assert;

test('dashboard component is displayed', function () {
    $this->get('/dashboard')->assertInertia(fn(Assert $page) => $page->component('Dashboard'));
});

test('it returns schedule meals', function () {

    $scheduleMeal = ScheduleMeal::factory()->create();
    $this->get('/dashboard')->assertInertia(
        fn(Assert $page) => $page->component('Dashboard')
            ->has('scheduleMeals', 1, fn(Assert $page) => $page
                ->where('id', $scheduleMeal->id)
                ->where('name', $scheduleMeal->name)
                ->where('hour', $scheduleMeal->hour)
                ->etc())
    );

});
