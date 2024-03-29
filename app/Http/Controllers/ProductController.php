<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function productlist(){
    $products = Product::with('product_category')->get();
    $prodlist=ProductCategory::all();
    //    return view('admin.pages.product.product-list');
       return view('admin.pages.product.product-list',compact('products','prodlist'));
       $request->validate([
           
       ]);

   }
  //productlist search
   public function productcreate(){
    $key=null;
    if(request()->search)
    {
        $key=request()->search;
        $products = Product::with('product_category')
            ->where('product_name','LIKE','%'.$key.'%')
            ->orWhere('product_price','LIKE','%'.$key.'%')
            ->get();
        return view('admin.pages.product.product-create',compact('products','key'));
    }
    $products = Product::with('product_category')->get();
    return view('admin.pages.product.product-create',compact('products','key'));
    //productlist search ed
   

    // $products = Product::with('product_category')->get();
    // // dd($products);
    // return view('admin.pages.product.product-create',compact('products','key'));
}
     //Product table database connection

   public function productStore(Request $request){
    //    dd($request->all());
    // table field or collume name -- input field name
    //Image
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
       Product::create([
           'product_image'=>$filename,
           'product_name'=>$request->product_name,
           'product_price'=>$request->product_price,
           'dealer_price'=>$request->dealer_price,
           'product_details'=>$request->product_details,
           'product_category_id'=>$request->product_category,
       ]);
       return redirect()->route('admin.product.create')->with('success','Product created successfully.');
   }
   //Product table database connection end



   //view details
   public function productDetails($product_id)
    {

//        collection= get(), all()====== read with loop (foreach)
//       object= first(), find(), findOrFail(),======direct
      $products=Product::find($product_id);

//      $product=Product::where('id',$product_id)->first();
        return view('admin.pages.product.product-details',compact('products'));
    }
      //view end

    //delete
    
      public function productDelete($product_id)
    {
       Product::find($product_id)->delete();
       return redirect()->back()->with('success','Product Deleted.');
    }

   //delete end







   











   //Productcategory start

   public function prodList(){
    $key=null;
    if(request()->search)
    {
        $key=request()->search;
        $prodlist = ProductCategory::where('category_name','LIKE','%'.$key.'%')
            ->get();
        return view('admin.pages.products_category.list',compact('prodlist','key'));
    }
       $prodlist=ProductCategory::all();
       return view('admin.pages.products_category.list',compact('prodlist','key'));
   }
   

   public function prodcreate(){
       return view ('admin.pages.products_category.create');
   }

   //Product create table database connection

   public function procreateStore(Request $request){
    // dd($request->all());
    $filename='';
        if ($request->hasfile('image')) {
            // dd('true');
            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
            // dd($filename);
   }
   ProductCategory::create([
    'image'=>$filename,
    'category_name'=>$request->category_name,
    'details'=>$request->details,
  
]);
return redirect()->route('admin.product_category.prolist')->with('success','Product created successfully.');

 } 

 //view details
 public function productCategoryDetails($product_id)
 {

   $prodlist=ProductCategory::find($product_id);
 return view('admin.pages.products_category.category-details',compact('prodlist'));
 }
   //view end


    
//delete
   public function productCategoryDelete($product_id)
    {
       Product::find($product_id)->delete();
       return redirect()->back()->with('success','Product_Category Deleted.');
    }
//delete end

}
