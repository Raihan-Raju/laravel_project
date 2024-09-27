<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Auth;

class TicketController extends Controller
{
    public function index(){
        $tickets = Ticket::where('create_by', Auth::guard('customer')->id())->get();
        return view('customer.page.ticket.list', compact('tickets'));
    }

    public function create(){

        return view('customer.page.ticket.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>['required'],
            'email'=>['required', 'lowercase','email'],
        ]);

        
        $ticket_no = Str::random(5) . time();
        $date = Carbon::now();

        Ticket::create([
            'ticket_no' =>$ticket_no,
            'date' =>$date,
            'name'=> $request->name,
            'email'=> $request->email,
            'create_by' => Auth::guard('customer')->id(),
            'update_by' => Auth::guard('customer')->id(),
        ]);
        return redirect()->route('customer.ticket')->with('success', 'Ticket Create Successful');
    }
}
