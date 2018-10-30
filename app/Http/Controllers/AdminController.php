<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use DataTables ;
use App\Category ;
use App\SubCategory ;
use App\Product ;


class AdminController extends Controller
{



    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct( )
    {

    }

    public function index () {
        return  view('home');
    }

    public function category() {
        return  view('category.categories');
    }
    public function addCategoryView () {
        return  view('category.addcategory');
    }
    public function editCategoryView($category_id) {
        $category = Category::find($category_id);
        return  view('category.editcategory')->with('category' , $category);
    }

    public function editsubCategoryView ($subcategory_id) {
        $subcategory = SubCategory::find($subcategory_id);//->with('category');
        $categories = Category::orderBy('title')->get() ;
        $data = array( 'subcategory' => $subcategory ,
                        'categories' => $categories );

        return  view('subcategory.editsubcategory')->withSubcategory ($subcategory)->withCategories($categories);
    }

    public function subcategory() {
        return  view('subcategory.subcategories');
    }
    public function addSubCategoryView () {
       // $categories = Category::all()->orderBy('name');
        return  view('subcategory.addsubcategory')->with('categories' , Category::orderBy('title')->get() );
    }
    public function addProductView () {
        return  view('product.addproduct')->with('subcategories' , SubCategory::orderBy('title')->get() );
    }

    public function products() {
        return  view('product.products');
    }

    /// category
    public function saveCategory (Request $request ) {
        if ( $request->has('category_id') && Category::where('id', '=', $request['category_id'])->exists()) {
            $category = Category::find($request['category_id']) ;
            $category->title = $request['name'];
            $category->description = $request['description'];
            $category->save();
            return \Redirect::route('categories')->with('message', 'Category Edited!!!');
           // return view('category.categories')->with('message' , 'Category Edited');
        }
      //  die($request['description']);
        $category = new Category();
        $category->title = $request['name'];
        $category->description = $request['description'];
        $category->save();
        return \Redirect::route('addcategory')->with('message', 'Category Added!!!');
       // return view('category.addcategory')->with('message' , 'Category Added');
    }

    public function deleteCategory (Request $request) {
        $category = Category::destroy($request['category_id']);

        return ;//view('category.categories')->with('message' , 'Category deleted');
    }

    public function getAllCategories () {

        return datatables()->eloquent(Category::query())->toJson();
    }

    public function getAllSubCategories () {

        return datatables()->eloquent(SubCategory::query()->with('Category'))->toJson();
    }

    public function saveSubCategory ( Request $request ) {
        if ( Category::where('id', '=', $request['category_id'])->exists()  ) {
            if ( $request->has('subcategory_id') && SubCategory::where('id', '=', $request['subcategory_id'])->exists() ) {
                $subcategory = SubCategory::find($request['subcategory_id']) ;
                $subcategory->category_id = $request['category_id'] ;
                $subcategory->title = $request['title'];
                $subcategory->description = $request['description'];
                $subcategory->save();
                return \Redirect::route('subcategories')->with('message', 'SubCategory Edited!!');
            }
            //return var_dump($request->all());
            $subcategory = new SubCategory();
            $subcategory->category_id = $request['category_id'] ;
            $subcategory->title = $request['title'];
            $subcategory->description = $request['description'];
            $subcategory->save();
            return \Redirect::route('subcategories')->with('message', 'SubCategory Added!!');
           // return view('subcategory.subcategories')->with('message' , 'SubCategory Added');
        }

        return \Redirect::route('addsubcategory')->with('message', 'Information insuffissante!');
       // return view('subcategory.addsubcategory')->with('message' , 'Information insuffissante ');
    }

    public function deleteSubCategory (Request $request) {
        $subcategory = SubCategory::destroy($request['subcategory_id']);

        return ;
    }


    /// products
    public function saveProduct(Request $request) {

        $this->validate($request, [
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if($request->hasfile('filename'))
        {
            $i= 0 ;
            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);
                $data[] = $name;
            }
            return var_dump($data);
        }


        return 'ok';

    }
}
