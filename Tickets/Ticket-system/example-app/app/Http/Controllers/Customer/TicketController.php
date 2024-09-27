<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function index(){
        $tickets = Ticket::get();
        // dd($tickets);
        // foreach($tickets as $data){
        //     return $data;
        // }
        // return $tickets;
        return view('customer.page.customer.dashboard', compact('tickets'));
    }

    public function create(){
       
        return view('customer.page.ticket.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>['required'],
            'email'=>['required','email']
        ]);

        // dd($request->all());

        Ticket::create([
            'name'=>$request->name,
            'email'=>$request->email,
        ]);
        return redirect()->route('customer.ticket')->with('success', 'Create Successful');
    }

    
    public function edit(){
       
        return view('customer.page.ticket.create');
    }

    public function update(Request $request){
        $request->validate([
            'name'=>['required'],
            'email'=>['required','email']
        ]);

        // dd($request->all());

        Ticket::create([
            'name'=>$request->name,
            'email'=>$request->email,
        ]);
        return redirect()->route('customer.ticket')->with('success', 'Create Successful');
    }

    // public function destroy($Request, $id){
    //    $tickets = Ticket::class('tickets')
    //                          ->where('id',$id)
    //                          ->delete();

    // }

}
