<?php

namespace App\Http\Controllers;
use App\Models\Item;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index (){ 

        $items = Item::get();
        return view('items.additems', compact('items'));

    }

    public function create(){ 
        $items = Item::create();

        return view('items.additems', compact('items'));
    }
}
