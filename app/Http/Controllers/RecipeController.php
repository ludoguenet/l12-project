<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use App\Enums\RecipeLevelEnum;
use App\Enums\IngredientUnitEnum;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipes = Recipe::query()->whereBelongsTo(auth()->user())->with('user')->get();

        return view('recipes.index', [
            'recipes' => $recipes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ingredients = Ingredient::all();
        $units = IngredientUnitEnum::getForSelect();

        return view('recipes.create', compact('ingredients', 'units'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'level' => 'required|in:' . implode(',', RecipeLevelEnum::getValues()),
            'description' => 'required|string',
            'duration' => 'required|numeric',
            'people' => 'required|numeric',
            'image' => 'required|image',
            'ingredients' => 'required|array|min:1',
            'ingredients.*' => 'required|exists:ingredients,id',
            'quantities' => 'required|array|min:1',
            'quantities.*' => 'required|numeric',
            'units' => 'required|array|min:1',
            'units.*' => 'nullable|in:' . implode(',', IngredientUnitEnum::getValues()),
        ]);

        dd($validated);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
