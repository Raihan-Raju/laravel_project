<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;
use Auth;

class AdminTicketController extends Controller
{
    public function index(){
        $tickets = Ticket::get();

        return view('admin.page.ticket.list', compact('tickets'));
    }

    public function edit($id){

        $ticket = Ticket::findOrFail($id);

        if($ticket->status === 'cancle'){
            return redirect()->route('admin.ticket')->with('error', $ticket->ticket_no . ' Alrady Cancled!');
        }

        return view('admin.page.ticket.edit', compact('ticket'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'status'=> ['required','string'],
        ]);

        $ticket = Ticket::findOrFail($id);

        $ticket->update([
            'status'=> $request->status,
            'update_by'=> auth()->id(),
        ]);

        return redirect()->route('admin.ticket')->with('success', 'Ticket update success!');
    }
}
