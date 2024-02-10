<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\adminLoginController;
use App\Http\Controllers\admin\adminTicketsController;
use App\Http\Controllers\admin\staffController;
use App\Http\Controllers\user\customerController;
use App\Http\Controllers\user\ledgerController;
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

    Route::get('create/ticket',[ticketController::class,'showTicket'])->name('ticketShow');
    Route::post('create/ticket',[ticketController::class,'ticket'])->name('ticket');

    Route::get('ledger/{id}/{name}',[ledgerController::class,'showLedger'])->name('ledgerShow');

    Route::get('receipt',[\App\Http\Controllers\user\receiptController::class,'showReceipt'])->name('receiptShow');
    Route::post('receipt',[\App\Http\Controllers\user\receiptController::class,'receipt'])->name('receiptShow');



    Route::get('logout',[loginController::class,'logout']);

});


Route::get('register',[loginController::class,'showRegister'])->name('registerShow');
Route::post('register',[loginController::class,'register'])->name('register');

Route::get('login',[loginController::class,'showLogin'])->name('loginShow');
Route::post('login',[loginController::class,'login'])->name('login');


//ADMIN


Route::get('admin/login',[adminLoginController::class,'showAdminLogin'])->name('adminLoginShow');
Route::post('admin/login',[adminLoginController::class,'adminLogin'])->name('adminLogin');

Route::middleware('adminAuth')->group(function (){
    Route::get('admin/index',[adminController::class,'showHome'])->name('adminShow');
    Route::get('admin/logout',[adminLoginController::class,'logout'])->name('adminLogout');

    Route::get('admin/ticket',[adminTicketsController::class,'showTickets'])->name('ticketsShow');
    Route::post('admin/approve',[adminTicketsController::class,'approveTickets']);

    Route::get('admin/staff',[staffController::class,'showStaff'])->name('staffShow');
    Route::post('admin/staff/{id}',[staffController::class,'updateStaff']);

});




