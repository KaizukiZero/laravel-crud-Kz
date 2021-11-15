<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    //? index page
    public function index()
    {
        $data = Stock::latest()->paginate(5);

        return view('index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    //? action view
    public function create_view()
    {
        return view('path/create');
    }
    public function edit_view()
    {
        return view('path/edit');
    }
    public function data_view()
    {
        return view('path/show');
    }

    //? action event

    public function creating(Request $request)
    {
        $data = array('fd_name' => "$request->nameprod"
                    , "fd_type" => "$request->typeprod"
                    , "fd_amount" => "$request->amountprod"
                    , "fd_amountbox" => "$request->amountinbox"
                    , "fd_pricebox" => "$request->priceprod");
        Stock::create($data);

        return redirect()->route('index')
            ->with('success', 'สำเร็จ');

    }
    public function Edit()
    {
        return view('path/edit');
    }

    //? delect data
    public function destroy(Stock $stock)
    {
        $stock->delete();

        return redirect()->route('index')
            ->with('success', 'Post deleted successfully');
    }

}
