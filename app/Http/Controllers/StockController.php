<?php

namespace App\Http\Controllers;
use App\Models\Stock;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function stocklist(){
        $stocks = Stock::all();
        // dd($stocks);
        return view('admin.pages.stock.stock-list',compact('stocks'));
    }

    public function stockcreate(){
        $stocks = Stock::all();
        // dd($stocks);
            return view('admin.pages.stock.stock-create');
    }
 //stock table database connection start
    public function stockStore(Request $request)
    {
        //    dd($request->all());
        // dd(date('Ymdhms'));
        $filename='';
        if ($request->hasfile('product_image')) {
            // dd('true');
            $file=$request->file('product_image');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
            // dd($filename);
            
        }
        // table field name -- input field name
           Stock::create([
               'product_image'=>$filename,
               'product_category'=>$request->product_category,
               'product_name'=>$request->product_name,
               'product_quantity'=>$request->product_quantity,
           ]);
           return redirect()->route('admin.stock.list')->with('success','Stock Saved successfully.');
        }
           //Stock table database connection end
            //delete
    
      public function stockDelete($stock_id)
      {
         Stock::find($stock_id)->delete();
         return redirect()->back()->with('success','Stock Deleted.');
      }
  
     //delete end
  


}
