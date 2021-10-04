<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $data = Stock::latest()->paginate(5);
    
        return view('index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

}
