<?php

use Illuminate\Support\Facades\Route;

Route::get('addcost',[App\Http\Controllers\CostController::class, 'cost']);
Route::get('create',[App\Http\Controllers\CostController::class, 'create']);
Route::post('create',[App\Http\Controllers\CostController::class, 'store']);


Route::get('/', function () {
    return view('masteruser');
});

Route::get('/', function () {
    return view('userpage.home');
});
Route::get('/about', function () {
    return view('userpage.about');
});
Route::get('/service', function () {
    return view('userpage.service');
});
Route::get('/menu', function () {
    return view('userpage.menu');
});
Route::get('/booking', function () {
    return view('userpage.booking');
});
Route::get('/team', function () {
    return view('userpage.team');
});
Route::get('/team', function () {
    return view('userpage.team');
});
Route::get('/contact', function () {
    return view('userpage.contact');
});

// -------------------------------------

Route::get('/masteradmin', function () {
    return view('masteradmin');
});
Route::get('/admin', function () {
    return view('admin_pages.admin');
});
Route::get('/dashbord', function () {
    return view('admin_pages.dashbord');
});
Route::get('/additems', function () {
    return view('admin_pages.items.additems');
});
Route::get('/manageitems', function () {
    return view('admin_pages.items.manageitems');
});
Route::get('/selesmanage', function () {
    return view('admin_pages.Seles.selesmanage');
});
Route::get('/selesadd', function () {
    return view('admin_pages.Seles.selesadd');
});
Route::get('/booking', function () {
    return view('admin_pages.booking.booking');
});
Route::get('/managebooking', function () {
    return view('admin_pages.booking.managebooking');
});
Route::get('/addstaff', function () {
    return view('admin_pages.staff.addstaff');
});
Route::get('/managestaff', function () {
    return view('admin_pages.staff.managestaff');
});

Route::get('/customermanage', function () {
    return view('admin_pages.customer_manage.customermanage');
});
// Route::get('/addcost', function () {
//     return view('admin_pages.cost.addcost');
// });
Route::get('/managecost', function () {
    return view('admin_pages.cost.managecost');
});

// Route::get('/about',Controller,about);
