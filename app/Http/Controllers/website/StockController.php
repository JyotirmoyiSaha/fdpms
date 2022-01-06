<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\ProductCategory;
class StockController extends Controller
{
    public function stock()
    {
        $stocks=Stock::all();
        $categories = ProductCategory::all();
        // variable name= Model name;
        //dd($stocks);
    
        return view('website.pages.stock', compact('stocks','categories'));
    }

}
