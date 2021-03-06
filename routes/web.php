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
    return view('home');
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

});

