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
use App\Http\Controllers\EventController;
use GuzzleHttp\Middleware;

Route::get('/',  [ EventController::class , 'index' ]);

Route::get('/events/create',  [ EventController::class , 'create' ])->Middleware('auth');

Route::get('/events/{id}' , [EventController::class, 'show']);

Route::get('/contact' , [EventController::class , 'contato']);

Route::post('/events' , [EventController::class , 'store']);

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');

Route::delete('/events/{id}', [EventController::class, 'destroy'])->Middleware('auth');

Route::get('/events/edit/{id}' , [EventController::class , 'edit'])->Middleware('auth');

Route::put('/events/update/{id}', [EventController::class, 'update'])->Middleware('auth');

Route::post('/events/join/{id}' , [EventController::class , 'joinEvent'])->Middleware('auth');

Route::delete('/events/leave/{id}' , [EventController::class , 'leaveEvent'])->Middleware('auth');