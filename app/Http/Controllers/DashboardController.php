<?php

namespace App\Http\Controllers;

use App\Models\MealType;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $mealTypes = MealType::all();

        return Inertia::render('Dashboard', [
            'mealTypes' => $mealTypes
        ]);
    }
}
