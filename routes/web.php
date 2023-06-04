<?php

use App\Http\Controllers\Inventory\categorycontroller;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//URL:/inventory/category .list
//URL:/inventory/category/add
//URL:/inventory/category/edit

Route::get("/inventory/category/add",[categorycontroller::class,'Add'])->name("inventory.category.add");

Route::post("/inventory/category/add-post", [categorycontroller::class, 'AddPost']);

Route::get("/inventory/category/menu",[categorycontroller::class,'menu'])->name("inventory.category.menu");

Route::get("/inventory/category/edit",[categorycontroller::class,'edit'])->name("inventory.category.edit");
Route::post("/inventory/category/edit-post", [categorycontroller::class, 'editpost']);

Route::get("/inventory/category/delete",[categorycontroller::class,'delete'])->name("inventory.category.delete");
Route::post("/inventory/category/delete-post", [categorycontroller::class, 'deletepost']);

route::get("/inventory/category",[categorycontroller::class,'index'])->name("inventory.category.index");
});
require __DIR__.'/auth.php';

