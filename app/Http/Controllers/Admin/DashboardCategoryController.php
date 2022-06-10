<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class DashboardCategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admins.view_categories', compact('categories'));
    }

    public function add_category(Request $request){
        $name = $request->name;
        Category::create(['name' => $name]);
        return redirect()->route('categories');
    }

    public function update_category($id, Request $request){
        $name = $request->name;
        $category = Category::find($id);
        $category->name = $name;
        $category->save();
        return redirect()->route('categories');
    }

    public function delete_category($id){
        Category::find($id)->delete();
        return redirect()->route('categories');
    }
}
