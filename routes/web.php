<?php

use App\Http\Controllers\ApplicationsController;
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

route::get('verify', function () {
    return view('forms');
});



// route::get('/verify/application', function() {
//     return view('application');
// });



Route::middleware(['auth', ])->group(function () {
    
    Route::get('/verify/profile', [ProfileController::class, 'index'])->name('profile');

    Route::post('/verify/profile/save', [ProfileController::class, 'save'])->name('profile.save');

    Route::middleware(['authchangepassword'])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::get('/verify/application', [ApplicationsController::class, 'application'])->name('application');
    });
});
require __DIR__ . '/auth.php';
