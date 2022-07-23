<?php

use App\Http\Controllers\admin\Homecontroller as AdminHomecontroller;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Profilecontroller;
use App\Http\Middleware\Chekrole;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\Inertia\ProfilePhotoController;

/* |-------------------------------------------------------------------------- | back |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */


// Route::get('/', [Homecontroller::class , 'index']);
Route::get('/', [Homecontroller::class , 'index'])->name('dashboard.dashboard');









/*/////////////////////////// | register/login/auth | ////////////////////////*/


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {



    Route::get('/dashboard', [Homecontroller::class , 'index'])->name('dashboard');

    Route::get('/dashboard/profile/edit/{user}', [Profilecontroller::class , 'edit'])->name('profile.edit');

    Route::post('/dashboard/profile/update/{user}', [Profilecontroller::class , 'create'])->name('profile.update');
});




/**************************admin******************************** */


Route::get('/admin', [AdminHomecontroller::class , 'index'])->name('admin.index')->middleware('Chekrole');


