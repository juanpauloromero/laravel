<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Dish;


class MenuController extends Controller
{
  
    public function index()
    {  
        $menus = Menu::with('dish')->get();
        
        return view('admin.menus.index', ['menus' => $menus]);
    }

    
    public function create()
    {
        $dishes = Dish::all();
        return view('admin.menus.create', ['dishes' => $dishes]);
    }

    public function store(Request $request)
    {

        $menu = new Menu(); 

        $validated = $request->validate([
            'menu_name' => 'required|string|max:50',
            'menu_week' => 'required|string|max:255',
            'menu_price'=> 'required|numeric|max:2000',
            'dish_id'=>'required |integer',
            ]);
        
            $menu->menu_name = $validated['menu_name'];
            $menu->menu_week = $validated['menu_week '];
            $menu->menu_price = $validated['menu_price'];
            $menu->dish_id = $validated['dish_id'];
        
        $menu->save();

   

        return redirect()->route('admin.menus.index')->with('succes', 'Le menu a été créé');
    }


   
    public function edit($id)
    {   
        $dishes = Dish::all();
        $menu = Menu::findOrFail($id);
        return view('admin.menus.edit', ['menu' => $menu, 'dishes' => $dishes]);
    }

    
    public function update(Request $request, $id)
    {
      
        $menu = Menu::findOrFail($id);
        $validated = $request->validate([
            'menu_name' => 'required|string|max:50',
            'menu_week' => 'required|string|max:255',
            'menu_price'=> 'required|numeric|max:2000',
            'dish_id'=>'required |integer',
            ]);
        
            $menu->menu_name = $validated['menu_name'];
            $menu->menu_week = $validated['menu_week '];
            $menu->menu_price = $validated['menu_price'];
            $menu->dish_id = $validated['dish_id'];

        return redirect()->route('admin.menus.index')->with('succes', 'Le menu a été modifieé');
    }

   

   
    public function destroy($id)
    {
        Menu::destroy($id);
        return redirect()->route('admin.menus.index')->with('succes', "L'element a été supprimé");
    }
}
