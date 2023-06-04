<?php

use Illuminate\Support\Facades\Route;


Route::get("/", [App\Http\Controllers\Pages\HomeController::class, 'home'])->name("dashboard");
Route::prefix('perpus')->name("perpus.")->group(function () {
    Route::prefix('books')->name("books.")->group(function () {
        Route::get("", [App\Http\Controllers\Pages\BooksController::class, 'index'])->name("index");
        Route::get("/create", [App\Http\Controllers\Pages\BooksController::class, 'create'])->name("create");
        Route::post("/shop", [App\Http\Controllers\Pages\BooksController::class, 'shop'])->name("shop");
        Route::get("/show", [App\Http\Controllers\Pages\BooksController::class, 'show'])->name("show");
        Route::delete("/{id}/delete", [App\Http\Controllers\Pages\BooksController::class, 'destroy'])->name("destroy");
    });
    Route::prefix('categories')->name("categories.")->group(function () {
        Route::get("/index", [App\Http\Controllers\Pages\CategoriesController::class, 'index'])->name("index");
        Route::get("/create", [App\Http\Controllers\Pages\CategoriesController::class, 'create'])->name("create");
        Route::post("/shop", [App\Http\Controllers\Pages\CategoriesController::class, 'shop'])->name("shop");
        Route::get("/{id}/show", [App\Http\Controllers\Pages\CategoriesController::class, 'show'])->name("show");
        Route::delete("/{id}/delete", [App\Http\Controllers\Pages\CategoriesController::class, 'destroy'])->name("destroy");
    });

    Route::get("/categories", [App\Http\Controllers\Pages\HomeController::class, 'category'])->name("category");
    Route::get("/author", [App\Http\Controllers\Pages\HomeController::class, 'author'])->name("author");
    Route::get("/borrowings", [App\Http\Controllers\Pages\HomeController::class, 'borrowings'])->name("borrowings");
    Route::get("/dashboard", [App\Http\Controllers\Pages\HomeController::class, 'BooksController@index']);
});
