<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dish;
use App\Models\Menu;

class DishController extends Controller
{
    public function index()
    {
        $dishes = Dish::all();
        return view('admin.dishes.index', ['dishes' => $dishes]);
    }

    public function create()
    {
        return view('admin.dishes.create');
    }


    public function store(Request $request)
    {


        $dish = new Dish();

        $validated = $request->validate([
            'dish_name' => 'required|max:25|min:5',
            'dish_description' => 'required|string|max:650',
            'image' => 'required',

        ]);


        $dish->dish_name = $validated['dish_name'];
        $dish->dish_description = $validated['dish_description'];
        $dish->image = $request->file('image')->store('image', 'public');
        $dish->is_active = $request->is_active;

        $dish->save();

        return redirect()->route('admin.dishes.index')->with('succes', 'Le plats a été créé');
    }

    public function edit($id)
    {
        $dish = Dish::findOrFail($id);
        return view('admin.dishes.edit', ['dish' => $dish]);
    }

    public function update(Request $request, $id)
    {
        $dish = Dish::findOrFail($id);

        $validated = $request->validate([
            'dish_name' => 'required|max:25|min:5',
            'dish_description' => 'required|string|max:650',
            'image' => 'required',

        ]);

        $dish->dish_name = $validated['dish_name'];
        $dish->dish_description = $validated['dish_description'];
        $dish->image = $request->file('image')->store('image');
        $dish->is_active = $request->is_active;
        $dish->save();

        return redirect()->route('admin.dishes.index')->with('succes', 'La repas a été modifieé');
    }

    public function destroy(Request $request, $id)
    {
        Dish::destroy($id);
        return redirect()->route('admin.dishes.index')->with('succes', 'Le plats a été supprimé');
    }
}
