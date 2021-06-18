<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('register');
});

Route::get('/dashboard', function () {
    $productList = Product::all();
    return view('main-shop', ['products' => $productList]);
})->middleware(['auth'])->name('dashboard');

Route::get('test', function(){
    return view('dashboard');
});

Route::resource('order', App\Http\Controllers\OrderController::class);
// Route::get('order',[App\Http\Controllers\OrderController::class], 'store')->name('cart_items')->middleware('auth');
Route::post('cart', [App\Http\Controllers\OrderItemController::class, 'store'])->name('add_to_cart')->middleware('auth');
Route::delete('/cart/destroy/{id}' , [App\Http\Controllers\OrderItemController::class , 'destroy']);
Route::get('/checkout' , [App\Http\Controllers\OrderItemController::class , 'checkout']);

require __DIR__.'/auth.php';
