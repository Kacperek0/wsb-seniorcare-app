<?php

use App\Http\Controllers\Shopping\ProductsController;
use App\Http\Controllers\Ticketing\CommentsController;
use App\Http\Controllers\Ticketing\TicketsController;
use App\Models\Product;
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

    try {
        DB::connection()->getPdo();
        echo "Connected successfully to: " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        die("Could not connect to the database. Please check your configuration. error:" . $e );
    }
    
    return view('welcome');
});

Auth::routes(['verify' => true]);

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

// Helper menu
Route::group(['prefix' => 'helper', 'middleware' => 'helper'], function()
    {
        Route::get('tickets', [TicketsController::class, 'index']);

        Route::post('close_ticket/{ticket_id}', [TicketsController::class, 'close']);
    }
);

// Shopping section

Route::group(['prefix' => 'shopping'], function()
    {
        Route::get('/', [ProductsController::class, 'index']);

        Route::get('cart', [ProductsController::class, 'cart']);

        Route::get('add-to-cart/{id}', [ProductsController::class, 'addToCart']);

        Route::patch('update-cart', [ProductsController::class, 'update']);

        Route::delete('remove-from-cart', [ProductsController::class, 'remove']);
    }
);

