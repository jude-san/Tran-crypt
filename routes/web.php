<?php

use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
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

// route::get('verify', function () {
//     return view('forms');
// });



// route::get('/application', function () {
//     return view('application');
// });

Route::resource('/forms', FormsController::class);



Route::middleware(['auth',])->group(function () {
    //Profile route for user updating INFO
    Route::get('/verify/profile', [ProfileController::class, 'index'])->name('profile');

    Route::post('/verify/profile/save', [ProfileController::class, 'save'])->name('profile.save');


    //Application route for user filling the forms INFO


    Route::middleware(['authchangepassword'])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');


        Route::get('/application', [ApplicationsController::class, 'index'])->name('application');
        Route::get('/verify/application', [ApplicationsController::class, 'create'])->name('application.create');
        Route::get('/verify/application/{apply}', [ApplicationsController::class, 'show'])->name('application.show');
        Route::post('/application/save', [ApplicationsController::class, 'save'])->name('application.save');


        Route::get('/application/payment', [PaymentController::class, 'index'])->name('payment');
        Route::post('/pay', [PaymentController::class, 'redirectToGateway'])->name('pay');
        Route::get('/payment/callback', [PaymentController::class, 'handleGatewayCallback']);
    });
});
require __DIR__ . '/auth.php';