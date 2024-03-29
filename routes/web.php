<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductupdateController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\DistributionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DealerController;
use App\Http\Controllers\DealerstockController;
use App\Http\Controllers\website\UserController;
use App\Http\Controllers\RequisitionController;
use App\Http\Controllers\RequisitiondetailsController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController as AdminUserController;


//website 
use App\Http\Controllers\website\ProductController as WebsiteProductController;
use App\Http\Controllers\website\CartController;
use App\Http\Controllers\website\StockController as WebsiteStockController;
use App\Http\Controllers\website\HomeController as WebsiteHomeController;
use App\Http\Controllers\website\RequisitionController as WebsiteRequisitionController;
use App\Http\Controllers\website\UserprofileController;
use App\Http\Controllers\website\AboutController;
use App\Http\Controllers\website\CartConfirmController;
use App\Http\Controllers\website\ContactController;
use App\Http\Controllers\website\WebrequisitiondetailsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//website
    //   Route::get('/website', function (){ 
    //       return view('website.pages.home');
    //    });
Route::group(['middleware'=>'web_auth'],function(){
        //for cart
Route::get('/requisitionlist',[CartController::class,'requisitionList'])->name('website.requisitionlist');
Route::post('/add-to-cart',[CartController::class,'addToCart'])->name('website.addToCart');
Route::get('/confirm',[CartConfirmController::class,'orderConfirm'])->name('website.oderconfirm');
Route::get('/cart/product/delete/{id}',[CartController::class,'cartDelete'])->name('cart.delete');
 //DealerStock
 Route::get('dealer/stock-list',[DealerstockController::class,'dealerstockList'])->name('admin.dealerstock.list');
 Route::get('dealer/stock-create',[DealerstockController::class,'dealerstockCreate'])->name('admin.dealerstock.create');
    });

Route::get('/registration',[UserController::class,'registration'])->name('user.registration');
Route::post('/registration/store',[UserController::class,'registrationstore'])->name('user.registration.store');
Route::post('/login',[UserController::class,'login'])->name('user.login');
Route::get('/logout',[UserController::class,'logout'])->name('user.web.logout');

//Home Routes
Route::get('/home',[WebsiteHomeController::class,'home'])->name('website');
Route::get('/product/list',[WebsiteProductController::class,'product'])->name('website.product');
Route::get('/product/category/list/{id}',[WebsiteProductController::class,'productCategory'])->name('website.product.category');

//stock
Route::get('/stock/list',[WebsiteStockController::class,'stock'])->name('website.stock');
//requisition
// Route::get('/requisition',[CartController::class,'webrequisition'])->name('website.requisition');
// Route::get('/requisition-create',[WebrequisitionController::class,'webrequisitionCreate'])->name('website.requisition.create');
// Route::post('/requisition/store',[WebsiteRequisitionController::class,'webrequisitionstore'])->name('website.requisition.store');



//about
Route::get('/about',[AboutController::class,'about'])->name('website.about');

//userprofile
Route::get('/userprofile',[UserprofileController::class,'userprofile'])->name('website.userprofile');
Route::patch('/userprofile//update/{id}',[UserprofileController::class,'userprofileupdate'])->name('website.userprofile.update');
Route::get('/myrequisition',[WebsiteRequisitionController::class,'myrequisition'])->name('website.requisition');
Route::get('/myrequisitiondetails/view/{id}',[WebrequisitiondetailsController::class,'viewrequisitiondetails'])->name('website.requisitiondetails.view');


//contact
Route::get('/contactus',[ContactController::class,'contact'])->name('website.contact');







//for backend


Route::group(['prefix'=>'admin'],function(){
    Route::get('/admin/login',[AdminUserController::class,'login'])->name('admin.login');
    Route::post('/admin/do-login',[AdminUserController::class,'doLogin'])->name('admin.doLogin');
    Route::get('/logout',[AdminUserController::class,'logout'])->name('user.logout');
    Route::group(['middleware'=>['auth','admin']],function(){

        Route::get('/master', function () {
            return view('master');
        })->name('admin.master');

        Route::get('/', function () {
            return view('admin.login');
        })->name('admin');
    });
    
    
    //Product Routes
    Route::get('product-list',[ProductController::class,'productList'])->name('admin.product.list');
    Route::get('product-create',[ProductController::class,'productCreate'])->name('admin.product.create');
    Route::get('product/view/{product_id}',[ProductController::class,'productDetails'])->name('admin.product.details');
    Route::get('product/delete/{product_id}',[ProductController::class,'productDelete'])->name('admin.product.delete');
    Route::get('product/edit/{id}',[ProductupdateController::class,'productEdit'])->name('admin.product.edit');
    Route::patch('product/update/{id}',[ProductupdateController::class,'productUpdate'])->name('admin.product.update');
    // database
    Route::post('/product/store',[ProductController::class,'productStore'])->name('admin.product.store');
    
    //product category create Routes
    Route::get('productcategory-list',[ProductController::class,'prodList'])->name('admin.product_category.prolist');
    Route::get('product_category-create',[ProductController::class,'prodCreate'])->name('admin.product_category.procreate');
    Route::get('product-category/view/{product_id}',[ProductController::class,'productCategoryDetails'])->name('admin.product_category.details');
    Route::get('product/category/delete/{product_id}',[ProductController::class,'productCategoryDelete'])->name('admin.product_category.delete');
    // database
    Route::post('/category-create/store',[ProductController::class,'procreateStore'])->name('admin.product_category.store');
    

    //Stock Routes
    Route::get('stock-list',[StockController::class,'stockList'])->name('admin.stock.list');
    Route::get('stock-create',[StockController::class,'stockCreate'])->name('admin.stock.create');
    Route::get('stock/delete/{stock_id}',[StockController::class,'stockDelete'])->name('admin.stock.delete');

   
    // database
    Route::post('/dealerstock/store',[DealerstockController::class,'dealerstockStore'])->name('admin.dealerstock.store');
    Route::post('/stock/store',[StockController::class,'stockStore'])->name('admin.stock.store');
    
    Route::get('register',[RegisterController::class,'register'])->name('admin.register');
    Route::get('home',[HomeController::class,'home'])->name('admin.home');
    
    //Requisition Routes
    Route::get('rlist',[RequisitionController::class,'rList'])->name('admin.requisition.list');
    Route::post('rlist/store',[RequisitionController::class,'rListStore'])->name('admin.requisition.list.store');
    Route::get('rdetails/{id}',[RequisitiondetailsController::class,'rDetails'])->name('admin.requisition.details');
    Route::post('rdetails/action/{id}',[RequisitiondetailsController::class,'action'])->name('action');
  
    
    //for dealer
    Route::get('dealer-list',[DealerController::class,'dealerList'])->name('admin.dealer.list');
    Route::get('dealer-create',[DealerController::class,'dealerCreate'])->name('admin.dealer.create');
    

    //User Routes
    Route::get('user-list',[HomeController::class,'userList'])->name('admin.user.list');
    Route::get('user/view/{user_id}',[HomeController::class,'userDetails'])->name('admin.user.details');
    Route::get('user/delete/{user_id}',[HomeController::class,'userDelete'])->name('admin.user.delete');

    //Distribution
    Route::get('distribution-list',[DistributionController::class,'distributionList'])->name('admin.distribution.list');
    Route::get('distribute',[DistributionController::class,'distributionCreate'])->name('admin.distribution.create');
    Route::post('/distribution/store',[DistributionController::class,'distributionStore'])->name('admin.distribution.store');
    

   //Report
   Route::get('report',[ReportController::class,'report'])->name('admin.report');
   Route::post('/report/store',[ReportController::class,'reportStore'])->name('admin.report.store');


});






