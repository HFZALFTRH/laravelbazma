<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get("example", function (){
    return "example route get";

});

route::get("coba", function (){
    return view("coba");
});

route::get("/example/{exampleId}", function($exampleId){
    return "example number : $exampleId";
});
route::get("/post/{postId}/comments/{commentsId}", function ($postId, $commentId){
    return "ini post ke: $postId dan comments ke: $commentId";
});


// boleh kosong
route
::get("post/{postId?}", function($postId = null){
    return "post opsional: $postId";
});

route::get("/coba/example",[CobaController::class, "example"]);

route::get("/coba/request", [CobaController::class, "request"]);


route::post("/coba/nested-request", [CobaController::class, "nestedRequest"]);
