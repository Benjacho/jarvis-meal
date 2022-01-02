<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMealRequest;
use App\Http\Requests\UpdateMealRequest;
use App\Models\Meal;
use Illuminate\Http\Response;
use Inertia\Inertia;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index(): \Inertia\Response
    {
        return Inertia::render('Meals/Index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return Inertia::render('Meals/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreMealRequest $request
     * @return Response
     */
    public function store(StoreMealRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Meal $meal
     * @return Response
     */
    public function show(Meal $meal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Meal $meal
     * @return Response
     */
    public function edit(Meal $meal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateMealRequest $request
     * @param Meal $meal
     * @return Response
     */
    public function update(UpdateMealRequest $request, Meal $meal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Meal $meal
     * @return Response
     */
    public function destroy(Meal $meal)
    {
        //
    }
}
