<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\CategoriesBooks;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $allCategories = CategoriesBooks::latest()->get();
        return view(
            "pages.categories.index",
            compact($allCategories)
        );
    }
    public function create()
    {
        return view("pages.categories.create");
    }
    public function store(Request $request)
    {
        return view("pages.categories.shop");
    }
    public function show(Request $request, string $id)
    {
        return view("pages.categories.show");
    }
    public function update(Request $request, string $id)
    {
    }
    public function destroy($id)
    {
    }
}
