<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// })->name("index");
Route::get("/", [App\Http\Controllers\HomeController::class, "index"])
->name("inicio")->middleware('auth');

// Route::get('aboutUs', function () {
//     return view('aboutUs');
// })->name("nosotros");

Route::get("aboutus", [App\Http\Controllers\AboutUsController::class, "index"])
->name("nosotros")->middleware('auth');

// Route::get('product', function () {
//     return view('product');
// })->name("producto");

Route::get("product", [App\Http\Controllers\ArticuloController::class, "index"])
->name("producto")->middleware('auth');

// Route::get('login&Register', function () {
//     return view('login&Register');
// })->name("loginyregistro");

Route::get("access&registration", [App\Http\Controllers\LoginYRegisterController::class, "index"])
->name("acceso&registro");

Route::post("access&registration", [App\Http\Controllers\LoginYRegisterController::class, "authenticate"])
->name("auth.authenticate.login");

Route::post("logout", [App\Http\Controllers\LoginYRegisterController::class, "logout"])
->name("logout.session")->middleware('auth');;

Route::post("access&registration/store", [App\Http\Controllers\LoginYRegisterController::class, "store"])
->name("user.store");

// Route::get('account', function () {
//     return view('account');
// })->name("cuenta");

Route::get("account", [App\Http\Controllers\AccountController::class, "index"])
->name("cuenta")->middleware('auth');

Route::post("/user/{id}/edit", [App\Http\Controllers\AccountController::class, "update"])
->name("user.update")->whereNumber('id')->middleware('auth');

Route::post("/user/{id}/destroy", [App\Http\Controllers\AccountController::class, "destroy"])
->name("user.destroy")->whereNumber('id')->middleware('auth');

// Route::get('contact', function () {
//     return view('contact');
// })->name("contacto");

Route::get("contact", [App\Http\Controllers\ContactoController::class, "index"])
->name("contacto")->middleware('auth');

Route::post("/contact/store", [App\Http\Controllers\ContactoController::class, "store"])
->name("Contact-store")->middleware('auth');



// Route::get('404', function () {
//     return view('404');
// })->name("error");

Route::get("error", [App\Http\Controllers\HomeController::class, "404"])
->name("error");

//
Route::get("/admin/Article", [App\Http\Controllers\AdminController::class, "indexArticle"])
->name("adminArticle")->middleware('auth','role');

Route::get("/admin/Article/create", [App\Http\Controllers\ArticuloController::class, "create"])
->name("Article-create")->middleware('auth','role');

Route::post("/admin/Article/store", [App\Http\Controllers\ArticuloController::class, "store"])
->name("Article-store")->middleware('auth','role');

Route::get('/admin/Article/{id}/editar', [App\Http\Controllers\ArticuloController::class, "edit"])
    ->name('Article-edit')
    ->whereNumber('id')
    ->middleware('auth','role');

Route::put('/admin/Article/{id}/editar', [App\Http\Controllers\ArticuloController::class, "update"])
    ->name('Article-update')
    ->whereNumber('id')
    ->middleware('auth','role');

Route::delete('/admin/Article/{id}/elimar', [App\Http\Controllers\ArticuloController::class, "destroy"])
    ->name('Article-destroy')
    ->whereNumber('id')
    ->middleware('auth','role');



//

Route::get("/admin/User", [App\Http\Controllers\AdminController::class, "indexUser"])
->name("adminUser")->middleware('auth','role');

Route::put('/admin/User/{id}/editar', [App\Http\Controllers\AdminController::class, "updateRoleAdmin"])
    ->name('User-update-role')
    ->whereNumber('id')
    ->middleware('auth','role');


//

Route::get("/admin/Consult", [App\Http\Controllers\AdminController::class, "indexConsult"])
->name("adminConsult")->middleware('auth','role');

//

Route::get("/cart", [App\Http\Controllers\CartController::class, "index"])
->name("cart")
->middleware('auth');

Route::post('/cart/update', [App\Http\Controllers\CartController::class, 'update'])
->name('cart.update')->middleware('auth');

Route::post('/carrito/store/{id}', [App\Http\Controllers\CartController::class, 'store'])
->name('cart.store')
->whereNumber('id')
->middleware('auth');
Route::delete('/carrito/delete/{id}', [App\Http\Controllers\CartController::class, 'destroy'])
->name('cart.delete')
->whereNumber('id')
->middleware('auth');
Route::post('/cart/clear', [App\Http\Controllers\CartController::class, 'clear'])
->name('cart.clear')
->middleware('auth');
