<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class CustomerController extends Controller
{
    public function index(){

        // return 'Hello'.Auth::guard('customer')->user()->name;
        return view('customer.page.customer.dashboard');
    }
}
