<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtencionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AcertijoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\SupAcertijoController; 
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ThorTicketController;
use App\Http\Controllers\ThorPagaController;
use App\Http\Controllers\PublicidadController;
use App\Http\Controllers\ReclamoController;
use App\Http\Controllers\CodeController;
use App\Http\Controllers\MarcaController;

use App\Mail\ReclamoMail;
use Illuminate\Support\Facades\Mail;
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

   // administrador general

   Route::resource('client', AdminController::class)->middleware('auth','role:admin');
   
   Route::get('changeStatus',[ClientController::class,'changeStatus'])->name('changeStatus');
   Route::put('client/{id}/delete',  [AdminController::class,'changeId']);
   
   //acertijero
   Route::resource('acertijo', AcertijoController::class)->middleware(['auth','role:admin|acertijero|supacertijero']);
   Route::resource('ticket', ThorTicketController::class)->middleware('auth');
   Route::resource('cash', ThorPagaController::class)->middleware('auth');

   Route::get('changeUse',[AcertijoController::class,'changeUse'])->name('changeUse');
  Route::get('changeUseTicket',[ThorTicketController::class,'changeUseTicket'])->name('changeUseTicket');

   //usuarios
   Route::resource('users', ClientController::class)->middleware(['auth','role:admin|adminusuario|acliente']);
   // Route::get('users',ClientController::class,'index');

   //carrera
   Route::resource('/race',CarreraController::class);
   Route::get('/raceAll',[CarreraController::class,'RaceAll'])->name('raceAll');
   Route::put('/updateConfig',[CarreraController::class,'updateConfig'])->name('updateConfig');
   Route::post('calendar-crud-ajax', [CarreraController::class, 'calendarEvents']);
   
   //administrador ticket
   Route::resource('codes', CodeController::class)->middleware('auth','role:admin|adminticket');
   Route::put('/updateConfigTicket',[CodeController::class,'updateConfigTicket'])->name('updateConfigTicket');
   Route::delete('/myproductsDeleteAll', [CodeController::class, 'deleteAll']);
   // Route::resource('acertijo', AcertijoController::class)->middleware(['auth','role:acertijero|admin']);

  //publicidad
   
   Route::resource('publicidad', PublicidadController::class)->middleware(['auth','role:admin|adminpublicidad']);
   Route::get('publicidad/{id}/view',[PublicidadController::class,'getPublicidad']);
   Route::get('twons/{id}',[PublicidadController::class,'getPosicion']);

   // reclamos

   Route::resource('reclamo', ReclamoController::class)->middleware(['auth','role:admin|adminreclamo']);

   Route::resource('atencion',AtencionController::class);

   Route::post('/message',[ReclamoController::class,'Message'])->name('message');

   // Route::post('reclamo',[ReclamoController::class,'send'])->name('send');
   
   // Route::get('reclamaciones',function ()
   // {
   //    $correo = new ReclamoMail;
   //    Mail::to('adrian@tecsup.edu.pe')->send($correo);

   //    return "Mensaje enviado";
   // });

   Route::resource('marca',MarcaController::class);