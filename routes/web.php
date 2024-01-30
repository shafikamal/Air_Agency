<?php

use App\Http\Controllers\user\customerController;
use App\Http\Controllers\user\loginController;
use App\Http\Controllers\user\statementController;
use App\Http\Controllers\user\ticketController;
use App\Http\Controllers\user\userController;
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


//USER

Route::middleware(['userAuth'])->group(function (){
    Route::get('index',[userController::class,'showHome'])->name('home');


    Route::get('add/customer',[customerController::class,'showCustomer'])->name('customerShow');
    Route::post('add/customer',[customerController::class,'Customer'])->name('customer');

    Route::get('editCustomer/{id}',[customerController::class,'showEditCustomer']);
    Route::post('editCustomer/{id}',[customerController::class,'editCustomer']);

    Route::get('statement',[statementController::class,'showStatement'])->name('statementShow');

    Route::get('create/ticket/{id}',[ticketController::class,'showTicket'])->name('ticketShow');
    Route::post('create/ticket/{id}',[ticketController::class,'ticket'])->name('ticket');

    Route::get('ledger/{id}',[\App\Http\Controllers\user\ledgerController::class,'showLedger'])->name('ledgerShow');



    Route::get('logout',[loginController::class,'logout']);

});


Route::get('register',[loginController::class,'showRegister'])->name('registerShow');
Route::post('register',[loginController::class,'register'])->name('register');

Route::get('login',[loginController::class,'showLogin'])->name('loginShow');
Route::post('login',[loginController::class,'login'])->name('login');


//ADMIN
Route::get('admin/index',[\App\Http\Controllers\admin\adminController::class,'showHome'])->name('adminShow');

Route::get('admin/ticket',[\App\Http\Controllers\admin\adminTicketsController::class,'showTickets'])->name('ticketsShow');
Route::get('admin/approve/{id}',[\App\Http\Controllers\admin\adminTicketsController::class,'approveTickets']);


