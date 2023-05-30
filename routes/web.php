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

route::get("/response/index", [App\Http\Controllers\bazmacontroler::class, 'responsefunction']);
route::get("/response/header", [App\Http\Controllers\bazmacontroler::class, 'responseheader']);
route::get("enkripsi/code", [app\http\controller\bazmacontroler::class, 'encryptiondata']);



route::get("/redirect/from", [app\http\controller\bazmacontroler::class, 'redirectfrom']);
route::get("/redirect/to", [app\http\controller\bazmacontroler::class, 'redirectto']);

route::get("/redirect/to/named", [app\http\controller\bazmacontroler::class, 'redirecttonamedroute'])->name("redirect . to");
route::get("/redirect/from/named", [app\http\controller\bazmacontroler::class, 'redirectfromnamedroute']);

route::get("/category", [app\http\controllers\pages\homecontroler::class, 'category'])->name("category");
route::get("/author", [app\http\controllers\pages\homecontroler::class, 'author'])->name("author");
route::get("/borrowings", [app\http\controllers\pages\homecontroler::class, 'borrowings'])->name("borrowing");

