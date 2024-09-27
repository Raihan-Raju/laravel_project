<?php

namespace App\Http\Controllers\Auth\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\CustomerLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\Customer;

class CustomerSessionController extends Controller
{
/**
* Display the login view.
*/
    public function create(): View
    {
        return view('auth.customer.login');
    }

    public function store(CustomerLoginRequest $request){
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('customer.dashboard', absolute: false));
    }

    // public function store(Request $request){

    //     $request ->validate([
    //         'email' =>'required|email',
    //         'password'=>'required',
    //     ]);

    //     // dd($request ->all());
    //     // $credentials = $request ->only('email','password');
    //     if(Auth::attempt(['email' => $request ->email, 'password' => $request ->password])){
            
    //         $user = Customer::where('email',$request->input('email'))->first();
    //         dd($user);
    //         Auth::guard('customer')->login($user);
    //         return redirect()->route('customer.dashboard')->with('success','Login Successful');
    //     }else{
    //         return redirect()->route('customer.login')->with('error','Login unsuccessful');
    //     }
    // }

    public function logout(){

        Auth::guard('admin')->logout();
        return redirect()->route('admin_login')->with('Success','Logout successfully');
    }
}
