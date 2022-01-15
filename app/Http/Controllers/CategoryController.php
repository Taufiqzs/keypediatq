<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Keyboard;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function listCategories() {
        $categories = Category::all();
        return view("category.manageCategory", ['categories' => $categories]);
    }

    public function updateCategory(Request $request) {
        $id = $request->id;
        $category = Category::find($id);

        $category->category_name = $request->category_name;

        $category->save();
        return redirect()->back();
    }

    public function deleteCategory($id) {
        $category = Category::find($id);
        $keyboard = Keyboard::where('category_id', '=', $category->id)->get();

       $keyboard->delete();
       $category->delete();

       return redirect()->back();
    }
}
