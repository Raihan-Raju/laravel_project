<?php

namespace App\Http\Controllers;

use App\Models\Cost;
use Illuminate\Http\Request;

class CostController extends Controller
{
    public function cost(){
        return view('admin_pages.cost.addcost');
    }
    public function create(){
        return view('admin_pages.cost.addcost');
    }
    public function store(request $request){
        $request->validate([
            'name' => 'required|max:255|string',
            'quantity' => 'required|max:11|integer',
            'taka' => 'required|max:11|integer',
            'note' => 'required|max:255|string',
            'is_active' => 'sometimes',
        ]);
        Cost::create([
            'name'=> $request->name,
            'quantity'=> $request->quantity,
            'taka'=> $request->taka,
            'is_active'=> $request->is_active == true ? 1:0,
        ]);
        return redirect('create')->with('status', 'cost created successfully');
    }
}
