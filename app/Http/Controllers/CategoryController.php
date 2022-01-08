<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {   
        $categories = Category::all();
        return view('admin.skills.categories', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required', 'max:30']
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return redirect('categories')->with('success', 'New category has been added !');
    }
 
    public function update(Request $request, Category $category)
    {
        $attributes = $request->validate([
            'name' => ['required', 'max:30']
        ]);

        $category->update(['name' => $request->name]);
        return redirect('categories')->with('success-category', 'The Category has been updated !');
    }

    public function destroy(Request $request, Category $category)
    {
        $category->delete();
        return redirect('categories')->with('success-category', 'The category has been deleted !');
    }
}
