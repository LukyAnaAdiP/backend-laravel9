<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public function index()
    {
        $categoryProducts = Category::all();
        return response()->json($categoryProducts);
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return response()->json($category);
    }

    public function store(Request $request)
    {
        $category = Category::create($request->all());
        return response()->json($category, 201);
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());
        return response()->json($category, 200);
    }

    public function destroy($id)
    {
        
        Category::destroy($id);
        return response()->json("null", 204);
    }
}
