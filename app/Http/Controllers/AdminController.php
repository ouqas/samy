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
        $categoriescount = Category::all()->count();
        $produitscount = Product::all()->count();
        $subcategoriescount = SubCategory::all()->count();
        return  view('home')->with('productscount' , $produitscount)->withSubcategories ($subcategoriescount)->withCategories ($categoriescount);
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
    public function editProductView ($product_id) {
        $product = Product::find($product_id);
        $subcategories = SubCategory::orderBy('title')->get() ;
        return  view('product.editproduct')->with('product' , $product)->withSubcategories ($subcategories);
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

    public function getAllProducts() {
        return datatables()->eloquent(Product::query()->with('SubCategory'))->toJson();
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

        $subcategory = SubCategory::where('id', '=', $request['subcategory_id'])->first();
        $subcategory->delete();
        return ;//SubCategory::delete($request['subcategory_id']);


    }


    /// products
    public function saveProduct(Request $request) {

        $validator = Validator::make($request->all(), [
            'filename' => 'required',
            'fiche_technique' => 'required' ,
            'fiche_technique.*' => 'mimes:pdf,docx|max:4048',
        ]);

        $extension = $request->file('fiche_technique')->getClientOriginalExtension();
       if ($extension != "pdf")
       {
           $validator->errors()->add('fiche_technique', 'Fiche Technique must be a PDF!');
           return redirect('admin/addproduct')
               ->withErrors($validator)
               ->withInput();
       }

        $product = new Product() ;
        $product->name = $request['name'] ;
        $product->sub_category_id = $request['subcategory_id'] ;
        $product->description = $request['description'] ?  '' : $request['description'];
        $product->dimension = $request['dimension'] ?  '' : $request['dimension'];
        $product->angle = $request['angle'] ?  '' : $request['angle'];
        $product->puissance = $request['puissance'] ?  '' : $request['puissance'];
        $product->flux_lumineux = $request['flumineux'] ?  '' : $request['flumineux'];
        $product->alimentation = $request['alimentation'] ?  '' : $request['alimentation'];
        $product->tcoulor = $request['tcouleur'] ?  '' : $request['tcouleur'];
        $product->module = $request['module'] ?  '' : $request['module'];
        $product->poids = $request['poids'] ?  '' : $request['poids'];
        $product->lumens = $request['lumens'] ?  '' : $request['lumens'];
        $product->battery = $request['battery'] ?  '' : $request['battery'];
        $product->technical_details = Storage::disk('public_uploads')->put('fiches', $request->file('fiche_technique')) ;

        if($request->hasfile('filename'))
        {
            //die('here');
            $i= 1 ;
            foreach($request->file('filename') as $image)
            {
               // $name=$image->getClientOriginalName();
                $filepath = Storage::disk('public_uploads')->put('images', $image, 'public');
                //$image->move(local_path().'/images/', $name);
                $product["image$i"] = $filepath ;
                $i++;
            }
            $product->save();

        }


       // return 'ok';
        return \Redirect::route('addproduct')->with('message', 'Product Added!');

    }

    public function deleteProduct (Request $request) {
        $product = Product::destroy($request['product_id']);

        return $product;
    }
}
