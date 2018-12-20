<?php

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

Route::get('/', function () {
    $value = Cache::remember('users' ,'5' , function () {
        return App\Category::with('SubCategories')->get();
    });
    return view('index')->with('categories' , $value);
});

Route::get('/about', function () {
    $value = Cache::remember('users' ,'5', function () {
        return App\Category::with('SubCategories')->get();
    });
    return view('about')->with('categories' , $value);
});

Route::get('/brochure', function () {
    $value = Cache::remember('users' ,'5', function () {
        return App\Category::with('SubCategories')->get();
    });
    return view('brochure')->with('categories' , $value);
});

Route::get('/contact', function () {
    $value = Cache::remember('users' ,'5', function () {
        return App\Category::with('SubCategories')->get();
    });
    return view('contact')->with('categories' , $value);
});

Route::get('/products/{subcategory_id}', 'SiteController@showproducts');


Route::get('/product/{product_id}',  'SiteController@showproduct');


Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});



Route::group(['prefix' => 'admin' ] , function() {
    Route::get('/', 'AdminController@index');

// for category
    Route::get('/category', 'AdminController@category')->name('categories');
    Route::get('/addcategory' ,'AdminController@addCategoryView')->name('addcategory') ;
    Route::post('/savecategory', 'AdminController@saveCategory');
    Route::get('/editcategory/{category_id}', 'AdminController@editCategoryView');
    Route::post('/deleteccategory' ,'AdminController@deleteCategory' ) ;
    Route::get('/gettallcategories' , 'AdminController@getAllCategories');

// for subcategory
    Route::get('/subcategory', 'AdminController@subcategory')->name('subcategories');;
    Route::get('/gettallsubcategories' , 'AdminController@getAllSubCategories');
    Route::get('/addsubcategory' ,'AdminController@addSubCategoryView')->name('addsubcategory') ;
    Route::get('/editsubcategory/{subcategory_id}', 'AdminController@editsubCategoryView');
    Route::post('/savesubcategory', 'AdminController@saveSubCategory');
    Route::post('/deletesubcategory' ,'AdminController@deleteSubCategory' ) ;

// for products
    Route::get('/products', 'AdminController@products')->name('products');
    Route::get('/addproduct' ,'AdminController@addProductView')->name('addproduct') ;
    Route::post('/saveproduct', 'AdminController@saveProduct');
    Route::get('/gettallproducts' , 'AdminController@getAllProducts');
    Route::get('/editproduct/{product_id}', 'AdminController@editProductView');
    Route::post('/deleteproduct' ,'AdminController@deleteProduct' ) ;

});

