<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::all();
        return view("category.data", ['categories' => $categories]);
    }

    public function create()
    {
        return view("category.create");
    }

    public function store(Request $request)
    {
        $category = new Category;
        $category->category = $request->category;
        $category->save();
        return redirect("categories");
    }

    public function show($id)
    {
        $category = Category::find($id);
        return view('category.show', ['category' => $category]);
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit', ['category' => $category]);
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->category = $request->category;
        $category->save();
        return redirect("categories");
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect("categories");
    }
}
