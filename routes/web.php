<?php

use App\Models\Sales;
use App\Models\Product;
use App\Models\Provider;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesController;

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
// Rota para a pagina inicial
Route::get('/', function () { $products = Product::all(); $sales = Sales::paginate(3); return view('layouts\home', ['products' => $products, 'sales' => $sales]);})->name('home.page');


// Estoque
Route::get('/Estoque', function(Product $products) {

    $products = Product::all();

    return view('layouts\storage', ['products' => $products]);

})->name('storage.page');


// Ações para a pagina de pedidos
Route::get('/Pedidos', [SalesController::class, 'View'])->name('sales.page');
Route::any('/NewSale', [SalesController::class, 'addSale'])->name('addSale.action');
Route::get('/AddAddress/{$id}', [SalesController::class, 'addAddress'])->name('AddAddress.action');


// Fornecedores

Route::get('/Fornecedores', function(Provider $providers) {

    $providers = Provider::all();
    $products = Product::all();
    return view('layouts\providers', ['providers' => $providers, 'products' => $products]);

})->name('provider.page');


