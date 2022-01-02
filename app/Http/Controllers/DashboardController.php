<?php

namespace App\Http\Controllers;

use App\Models\ScheduleMeal;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $scheduleMeals = ScheduleMeal::query()->orderBy('hour', 'asc')->get();
        return Inertia::render('Dashboard', [
            'scheduleMeals' => $scheduleMeals
        ]);
    }
}
