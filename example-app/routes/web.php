<?php

use App\Http\Controllers\CasesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;

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
    return view('login');
});
Route::get('/devices/create', [DeviceController::class, 'create'])->name('create');
Route::post('/devices', [DeviceController::class, 'store'])->name('store');
route::get('/dashboard/devices', [DeviceController::class, 'index'])->middleware(['auth', 'verified'])->name('devices');
Route::get('/dashboard/devices/create', [DeviceController::class, 'create'])->name('create');
Route::post('/dashboard/devices', [DeviceController::class, 'store'])->name('store');
route::post('/cases', [CasesController::class, 'store'])->name('store');
route::get('/dashboard/search', [DeviceController::class, 'search'])->middleware(['auth', 'verified'])->name('search');
route::get('/dashboard/devices/{device}', [DeviceController::class, 'show'])->middleware(['auth', 'verified'])->name('show');
route::get('/dashboard/cases', [CasesController::class, 'index'])->middleware(['auth', 'verified'])->name('cases');
route::get('/devices/{device}',[DeviceController::class,'seize'])->name('seize');
Route::get('/search', [DeviceController::class, 'search'])->name('search');
Route::get('/devices', [DeviceController::class, 'index'])->name('index');
Route::get('/devices/{device}', [DeviceController::class, 'show'])->name('seize');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
