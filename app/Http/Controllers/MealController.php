<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMealRequest;
use App\Http\Requests\UpdateMealRequest;
use App\Models\Meal;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Inertia\Inertia;
use Redirect;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index(): \Inertia\Response
    {
        $meals = Meal::all();

        return Inertia::render('Meals/Index', [
            'meals' => $meals
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create(): \Inertia\Response
    {
        return Inertia::render('Meals/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreMealRequest $request
     * @return RedirectResponse
     */
    public function store(StoreMealRequest $request): RedirectResponse
    {
        Meal::create($request->safe()->all());

        return Redirect::route('meals')->with(['message' => 'Meal Created']);
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
     * @return \Inertia\Response
     */
    public function edit(Meal $meal): \Inertia\Response
    {
        return Inertia::render('Meals/Create', [
            'meal' => $meal
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateMealRequest $request
     * @param Meal $meal
     * @return RedirectResponse
     */
    public function update(UpdateMealRequest $request, Meal $meal): RedirectResponse
    {
        $meal->update($request->safe()->all());

        return Redirect::route('meals')->with(['message' => 'Meal Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Meal $meal
     * @return RedirectResponse
     */
    public function destroy(Meal $meal): RedirectResponse
    {
        $meal->delete();

        return Redirect::route('meals')->with(['message' => 'Meal Deleted']);
    }
}
