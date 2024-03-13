<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

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
    return view('successfullorder');
});

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::redirect('/', 'admin/welcome');
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('welcome', [AdminController::class, 'welcome'])->name('welcome');

    Route::resource('pages', PageController::class);
    Route::resource('products', ProductController::class);
    Route::resource('orders', OrderController::class);

    Route::delete('orders/', [OrderController::class, 'bulkDelete'])->name('bulk_delete');
    Route::patch('orders/', [OrderController::class, 'bulkStatusChange'])->name('bulk_status_change');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/{page:slug}', [PageController::class, 'show'])->name('page');
Route::post('/admin/orders', [OrderController::class, 'store'])->name('admin.orders.store');
