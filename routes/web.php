<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AcertijoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\SupAcertijoController; 
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ThorTicketController;
use App\Http\Controllers\ThorPagaController;
use App\Http\Controllers\PublicidadController;
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

// client

//  Route::middleware(['auth', 'admin'])->group(function () {
   Route::resource('client', AdminController::class)->middleware('auth','role:admin');
   Route::resource('/race',CarreraController::class);
   //Route::get('/race',[CarreraController::class,'index']);
   Route::post('calendar-crud-ajax', [CarreraController::class, 'calendarEvents']);
   

   // Route::resource('acertijo', AcertijoController::class)->middleware(['auth','role:acertijero|admin']);

   Route::resource('acertijo', AcertijoController::class)->middleware(['auth','role:admin|acertijero|supacertijero']);


   
   Route::resource('ticket', ThorTicketController::class)->middleware('auth');
   Route::resource('cash', ThorPagaController::class)->middleware('auth');

   Route::resource('publicidad', PublicidadController::class)->middleware(['auth','role:admin|adminpublicidad']);

   // Route::resource('acertijo', AcertijoController::class)->middleware(['auth','role:supacertijero']);

   // Route::get('acertijo',[AcertijoController::class,'index'])->middleware(['auth','role:superacertijero']);
   Route::resource('users', ClientController::class)->middleware(['auth','role:admin']);

   

    //Route::get('/acertijos',[AdminController::class,'indexAcertijo']);
   // Route::resource('user', [UserController::class]);
  // });
//Route::post('/dashboard',[AdminController::class, 'store']);
//Route::put('/dashboard/edit',[AdminController::class,'edit']);
//Route::put('/dashboard/destroy',[AdminController::class,'destroy']);
//Route::resource('/acertijo', [AcertijoController::class]);

// acertijos vistas
//  Route::middleware(['auth', 'acertijero'])->group(function () {
  //  Route::resource('acertijo', AcertijoController::class);
   Route::get('changeUse',[AcertijoController::class,'changeUse'])->name('changeUse');

   // Route::get('changeUse',[ThorTicketController::class,'changeUse'])->name('changeUse');
   

//    Route::resource('acertijo', AcertijoController::class);
//    // Route::get('/acertijo',[AcertijoController::class, 'index']);
//    // Route::post('/acertijo',[AcertijoController::class,'store']);
//    // Route::get('acertijo/create',[AcertijoController::class, 'create']);
//  });

// funcion acertijos
// Route::middleware(['auth', 'admin'])->group(function () {
//    Route::resource('acertijo', AcertijoController::class);
// });