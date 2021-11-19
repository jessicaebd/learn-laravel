<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories.index', [
            "title" => "Categories",
            "categories" => Category::all()
        ]);
    }

    public function show(Category $category)
    {
        return view('categories.single-category', [
            'title' => $category->name,
            'eventList' => $category->events,
            'category' => $category->name
        ]);
    }
}
