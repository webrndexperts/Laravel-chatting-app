<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\customer;

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
    return view('welcome');
});

// Route::get('/admin', function () {
    // return view('admin.index');
// });


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/companyList', [CompanyController::class, 'index'])->name('companyList');
Route::get('/createCompany', [CompanyController::class, 'create'])->name('createCompany');
Route::post('/createemployee', [CompanyController::class, 'store'])->name('createemployee');

Route::get('/customerList', [customer::class, 'index'])->name('customerList');
Route::get('/customerCreate', [customer::class, 'create'])->name('customerCreate');
Route::post('/customerSave', [customer::class, 'store'])->name('customerSave');

Route::get('/customerView/{id}', [customer::class, 'show'])->name('customerView');

Route::get('/customerEdit/{id}', [customer::class, 'edit'])->name('edit');

Route::post('/customerUpdate/{id}/', [customer::class, 'update'])->name('update');

Route::delete('/customerDestroy/{id}',  [customer::class, 'destroy']);


Route::get('test_send', function () {
    event(new App\Events\NotificationEvent('admin'));
    return "Event has been sent!";
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
