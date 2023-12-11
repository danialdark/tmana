<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Panel\user\MainUserPanelController;
use App\Http\Controllers\panel\user\plans\UserPlansController;
use App\Http\Controllers\panel\user\Orders\UserOrdersController;

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

Route::post("auth/sendotp", [AuthController::class, "sendotp"]);


Route::get('/', function () {
    return view('app.telegram.index');
})->name("index");




route::prefix("mypanel")->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    route::get("/", [MainUserPanelController::class, "index"])->name("user.panel.index");




    route::prefix("plans")->group(function () {
        route::get("/purchase", [UserPlansController::class, "plans"])->name("user.panel.plans");

        route::get("/actives", [UserPlansController::class, "activePlans"])->name("user.panel.active.plans");
    });



    route::prefix("orders")->group(function () {
        route::get("/all", [UserOrdersController::class, "orders"])->name("user.panel.orders.all");
    });
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
