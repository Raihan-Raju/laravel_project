<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminTicketController;
use App\Http\Controllers\Admin\AdminController;

Route::middleware(['admin'])->prefix('admin','verified')->group(function () {
    Route::get('/dashboard',[AdminController::class, 'index'])->name('dashboard');
    
    Route::prefix('ticket')->group(function () {
        Route::get('/',[AdminTicketController::class,'index'])->name('admin.ticket');
        Route::get('{id}',[AdminTicketController::class,'edit'])->name('admin.ticket.edit');
        Route::put('{id}',[AdminTicketController::class,'update']);
    });
    
});