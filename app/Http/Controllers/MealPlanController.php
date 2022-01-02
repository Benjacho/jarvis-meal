<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMealPlanRequest;
use App\Http\Requests\UpdateMealPlanRequest;
use App\Models\MealPlan;

class MealPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMealPlanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMealPlanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MealPlan  $mealPlan
     * @return \Illuminate\Http\Response
     */
    public function show(MealPlan $mealPlan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MealPlan  $mealPlan
     * @return \Illuminate\Http\Response
     */
    public function edit(MealPlan $mealPlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMealPlanRequest  $request
     * @param  \App\Models\MealPlan  $mealPlan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMealPlanRequest $request, MealPlan $mealPlan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MealPlan  $mealPlan
     * @return \Illuminate\Http\Response
     */
    public function destroy(MealPlan $mealPlan)
    {
        //
    }
}
