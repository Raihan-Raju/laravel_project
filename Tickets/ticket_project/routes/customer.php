<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Customer\TicketController;



Route::middleware('customer')->prefix('customer')->group(function(){
    Route::get('dashboard',[CustomerController::class, 'index'])->name('customer.dashboard');

    Route::prefix('ticket')->group(function(){
        Route::get('/',[TicketController::class, 'index'])->name('customer.ticket');
        Route::get('create',[TicketController::class, 'create'])->name('customer.ticket.create');
        Route::post('create',[TicketController::class, 'store']);
    });
});
