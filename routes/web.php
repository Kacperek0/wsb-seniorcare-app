<?php

use App\Http\Controllers\Ticketing\CommentsController;
use App\Http\Controllers\Ticketing\TicketsController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Senior's dashboard
Route::get('/senior_dashboard', [App\Http\Controllers\Senior\DashboardController::class, 'index'])->middleware('role:senior');

// Helper's dashboard
Route::get('/helper_dashboard', [App\Http\Controllers\Helper\DashboardController::class, 'index'])->middleware('role:helper');

// Create new ticket
Route::get('new-ticket', [TicketsController::class, 'create']);

// Store new ticket
Route::post('new-ticket', [TicketsController::class, 'store']);

// List tickets
Route::get('my_tickets', [TicketsController::class, 'userTickets']);

// Show selected ticket
Route::get('tickets/{ticket_id}', [TicketsController::class, 'show']);

// Comment on ticket
Route::post('comment', [CommentsController::class, 'postComment']);
