<?php

namespace App\Http\Controllers;

use App\Models\ScheduleMeal;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $scheduleMeals = ScheduleMeal::all();
        ray($scheduleMeals);

        return Inertia::render('Dashboard', [
            'scheduleMeals' => $scheduleMeals
        ]);
    }
}
