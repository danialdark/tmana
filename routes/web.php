<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\User\AdminUserController;
use App\Http\Controllers\Admin\Orders\AdminOrderController;
use App\Http\Controllers\Panel\user\MainUserPanelController;
use App\Http\Controllers\Panel\User\Plans\UserPlansController;
use App\Http\Controllers\Panel\User\Orders\UserOrdersController;
use App\Http\Controllers\Admin\Product\Category\AdminProductController;
use App\Http\Controllers\Admin\Product\Category\AdminProductCategoryController;


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


// route::prefix("matrix")->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {



//     // for user of the site
//     route::prefix("users")->group(function () {
//         route::get("/all", [AdminUserController::class, "all"])->name("admin.users.all");
//         route::post("/changeStatus/{userId}", [AdminUserController::class, "changeStatus"])->name("admin.users.changeStatus");
//         route::post("/changeRoll/{userId}", [AdminUserController::class, "changeRoll"])->name("admin.users.changeRoll");
//         route::post("/delete/{userId}", [AdminUserController::class, "delete"])->name("admin.users.delete");
//     });


//     // for products
//     route::prefix("product")->group(function () {
//         route::get("all", [AdminProductController::class, "all"])->name("admin.product.all");
//         route::get("store", [AdminProductController::class, "store"])->name("admin.product.store");
//         route::get("update/{productId}", [AdminProductController::class, "update"])->name("admin.product.update");
//         route::get("delete/{productId}", [AdminProductController::class, "delete"])->name("admin.product.delete");



//         // for product category
//         route::prefix("category")->group(function () {
//             route::get("all", [AdminProductCategoryController::class, "all"])->name("admin.product.category.all");
//             route::post("store", [AdminProductCategoryController::class, "store"])->name("admin.product.category.store");
//             route::post("update/{categoryId}", [AdminProductCategoryController::class, "update"])->name("admin.product.category.update");
//             route::post("delete/{categoryId}", [AdminProductCategoryController::class, "delete"])->name("admin.product.category.delete");
//         });
//     });

//     route::prefix("orders")->group(function () {
//         route::get("all", [AdminOrderController::class, "all"])->name("admin.orders.all");
//         route::post("status/{orderId}", [AdminOrderController::class, "status"])->name("admin.orders.status");
//         route::post("delete/{orderId}", [AdminOrderController::class, "delete"])->name("admin.orders.delete");
//     });
// });

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
