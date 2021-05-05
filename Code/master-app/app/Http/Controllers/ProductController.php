<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderByDesc('id')->paginate(6);
        return view('dashboard.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        
        $gifts         = Gift::all();
        $categories = Category::orderBy('category_name')->get();
        return view('dashboard.product.edit', compact('gifts','categories','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {    
        if ($request->hasFile('product_img')) {
            //save photo in to folder
            $file_name = $request->product_img->getClientOriginalName();
            $path = 'images/products';
            $request->product_img->move($path, $file_name);
           
        } else {
            $file_name = $product->product_img;
        }
        
        $product->product_img            = $file_name;
        $product->product_name           = $request->input('product_name');
        $product->product_price          = $request->input('product_price');
        $product->sale_price             = $request->input('sale_price');
        $product->product_description    = $request->input('product_description');
        $product->product_qty            = $request->input('product_qty');
        $product->category_id            = $request->input('category_id');
        $product->subcategory_id         = $request->input('subcategory_id');
        $product->gift_id                = $request->input('gift_id');
        $product->status                 = $request->input('status');
        $product->save();
        if($request->hasFile('imgs')){
            $files=$request->file('imgs');
            foreach($files as $file){
                $file_name = $request->product_img->getClientOriginalName();
                $path      = 'images/products';
                $request->product_img->move($path, $file_name);
                $product->images()->create(['name'=>$file_name]);
            }
        }
        return redirect(route('products.index'))->with('success_update','product has been updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('products.index'))->with('success_delete','product has been removed !');
    }

    /**
     * Display gallery for specific product
     *
     * @return \Illuminate\Http\Response
     */
    public function gallery($id)
    {
        
        $product = Product::find($id);
        $imgs = Image::where('product_id',$id)->orderByDesc('id')->get();
        return view('dashboard.product.gallery.index', compact('imgs','product'));
    }
    /**
     *Show the form for editing img in gallery for specific product.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function editGallery($id)
    {
        $img = Image::find($id); ;
        return view('dashboard.product.gallery.edit',compact('img'));
    }
 /**
     * Update img in gallery for specific product.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function updateGallery(Request $request, $id)
    {
        $img = Image::find($id);
        if ($request->hasFile('name')) {
            //save photo in to folder
            $file_name = $request->product_img->getClientOriginalName();
            $path      = 'images/products';
            $request->product_img->move($path, $file_name);
            $request->name->move($path, $file_name);
        } else {
            $file_name = $img->name;
        }
        
        $img->name  = $file_name;
        $img->save();
        return redirect(route('gallery.show',$img->product_id))->with('success_update','image has been updated successfully!');
    
    }


     /**
     * Remove the specified img from gallery.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyGallery($id)
    {
        $img  = Image::find($id);
        $img->delete();
        return redirect(route('gallery.show',$img->product_id))->with('success_delete','image has been removed !');
    }

    public function showSubcategory($id){
        $subcategories = Subcategory::where('category_id' ,$id)->pluck('subcategory_name','id');
       return json_encode($subcategories);
    }
}
