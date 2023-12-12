<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menuItems = Menu::all(); 
        return view('menu', compact('menuItems'));
    }

    public function update(Request $request, $id)
    {
        
        $menuItem = Menu::findOrFail($id);
        $menuItem->update($request->all());
        return redirect()->back()->with('success', 'Menu item updated successfully');
    }

    public function destroy($id)
    {
        
        $menuItem = Menu::findOrFail($id);
        $menuItem->delete();
        return redirect()->back()->with('success', 'Menu item deleted successfully');
    }

    public function store(Request $request)
{
    
    $validatedData = $request->validate([
        'name' => 'required|string',
        'price' => 'required|numeric',
        'description' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
    ]);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName(); 
        $image->storeAs('public/images/menu', $imageName); 

        
        Menu::create([
            'name' => $validatedData['name'],
            'price' => $validatedData['price'],
            'description' => $validatedData['description'],
            'image' => $imageName,
        ]);

        return redirect()->back()->with('success', 'Menu item added successfully');
    }
}




}
