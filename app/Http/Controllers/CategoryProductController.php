<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public function index()
    {
        $categoryProducts = CategoryProduct::all();
        return response()->json($categoryProducts);
    }

    public function show($id)
    {
        $category = CategoryProduct::findOrFail($id);
        return response()->json($category);
    }

    public function store(Request $request)
    {
        $category = CategoryProduct::create($request->all());
        return response()->json($category, 201);
    }

    public function update(Request $request, $id)
    {
        $category = CategoryProduct::findOrFail($id);
        $category->update($request->all());
        return response()->json($category, 200);
    }

    public function destroy($id)
    {
        
        Category::destroy($id);
        return response()->json("null", 204);
    }
}
