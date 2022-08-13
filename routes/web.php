<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ordersController;
use App\Http\Controllers\Auth\LoginController;
//use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\expensesController;
use App\Http\Controllers\invoicesController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\productsController;



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
Route::get('/clearcache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'CACHE CLEARED SUCCESSFULLY!';
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/order', [ordersController::class, 'create']);
Route::post('/addorder', [ordersController::class, 'store']);
Route::get('/orders', [ordersController::class, 'index']);
Route::post('/getOrders', [ordersController::class, 'getOrders']);
Route::post('/getOrderAmount', [ordersController::class, 'getOrderAmount']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/register', [RegisterController::class, 'create']);
//Route::post('/addregister', [RegisterController::class, 'store']) ->;

Route::get('/profile', [profileController::class, 'index']);

//Route::get('/kkk', [LoginController::class, 'create']);
Route::post('/addlogin', [LoginController::class, 'store']);
//Route::get('/logout', [expensesController::class, 'destroy']);

Route::get('/expense', [expensesController::class, 'create']);
Route::post('/addexpenses', [expensesController::class, 'store']);
Route::get('/expenses', [expensesController::class, 'index']);

Route::get('/invoice', [invoicesController::class, 'create']);
Route::post('/addinvoice', [invoicesController::class, 'store']);
Route::get('/invoices', [invoicesController::class, 'index']);
Route::post('/getInvoices', [invoicesController::class, 'getInvoices']);
Route::post('/getInvoicesAmount', [invoicesController::class, 'getInvoicesAmount']);

Route::get('/payment', [paymentController::class, 'create']);
Route::post('/addpayment', [paymentController::class, 'save']);
Route::get('/payments', [paymentController::class, 'index']);

Route::get('/customer', [customerController::class, 'create']);
Route::post('/addcustomer', [customerController::class, 'save']);
Route::get('/customers', [customerController::class, 'index']);

Route::get('/product', [productsController::class, 'create']);
Route::post('/addproduct', [productsController::class, 'save']);
Route::get('/products', [productsController::class, 'index']);