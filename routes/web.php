<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\DeviceController;

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
    return view('auth.login');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::post('/', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');

// Users Routes
Route::get('/show/user',[UserController::class, 'show'])->name('users.list');
Route::get('/edit-user/{id}',[UserController::class, 'edit'])->name('users.edit');
Route::post('/update-user/{id}',[UserController::class, 'update'])->name('users.update');


// Agent routes
Route::get('/create/agent',[AgentController::class, 'create'])->name('agents.create');
Route::get('/show/agent',[AgentController::class, 'show'])->name('agents.list');
Route::post('/save/agent',[AgentController::class, 'store'])->name('agent.store');

// Device routes
Route::get('/create-device/{id}',[DeviceController::class, 'create'])->name('devices.create');
Route::post('/save/device',[DeviceController::class, 'store'])->name('device.store');
Route::get('/show/device',[DeviceController::class, 'show'])->name('devices.list');


