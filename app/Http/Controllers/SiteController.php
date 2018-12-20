<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use DataTables ;
use App\Category ;
use App\SubCategory ;
use App\Product ;

use phpDocumentor\Reflection\Project;
use Validator;
use Illuminate\Support\Facades\Storage;
use Cache;


class SiteController extends Controller
{
    public function __construct( )
    {

    }

    public function showproducts ($subcetegory) {
        if ( is_numeric ($subcetegory) ){

            $value = Cache::remember('users' ,'5', function () {
                return App\Category::with('SubCategories')->get();
            });

            $products = Product::where('sub_category_id', $subcetegory)->get();
            return view('products')->withcategories($value)->with('products' , $products);
        }
        return 'nigga no';

    }

    public function showproduct ($product_id) {
        if ( is_numeric ($product_id) ){

            $value = Cache::remember('users' ,'5', function () {
                return App\Category::with('SubCategories')->get();
            });

            $product = Product::where('id', $product_id)->first();
                return view('product')->withcategories($value)->with('product' , $product);
        }
        return 'no';
    }
}
