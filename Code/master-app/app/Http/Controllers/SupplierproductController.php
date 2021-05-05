<?php

namespace App\Http\Controllers;
use App\Models\Gift;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Category;
use App\Models\Admin;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Notifications\ProductAdded;
use App\Notifications\ProductUpdated;
use Illuminate\Support\Facades\Notification;


class SupplierproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('supplier_id',Auth::user()->id)->orderByDesc('id')->paginate(6);
        return view('customized_dashboard.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gifts         = Gift::all();
        $categories = Category::orderBy('category_name')->get();
        return view('customized_dashboard.product.create', compact('gifts','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $supplier         =  Auth::user();
        $this->validateProduct();
            //save photo in to folder
         
            $file_name = $request->product_img->getClientOriginalName();
            $path = 'images/products';
            $request->product_img->move($path, $file_name);
            $product = new Product(
                request(['product_name',
                         'product_description',
                         'product_price',
                         'sale_price',
                         'product_qty',
                         'gift_id',
                         'subcategory_id',
                         'category_id'
                                        ]));
            $product->product_img = $file_name;
            $product->supplier_id = $supplier->id;
            $product->save();
           
        

          
            if($request->hasFile('imgs')){
                $files=$request->file('imgs');
                
                foreach($files as $file){
                    
                    $file_name = $file->getClientOriginalName() ;
                    $path = 'images/products';
                    $file->move($path, $file_name); 
                   
                   $product->images()->create(['name'=>$file_name]); 

                }
            }
            $admins = Admin::all();
            Notification::send($admins, new ProductAdded($product));

            return redirect(route('supplierproducts.index'))->with('success_create','product has been created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
    {   $product       = Product::find($id);
        $gifts         = Gift::all();
        $categories = Category::orderBy('category_name')->get();
        
        return view('customized_dashboard.product.edit',compact('product','gifts','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product       = Product::find($id);
        if ($request->hasFile('product_img')) {
            //save photo in to folder
            $file_name = $request->product_img->getClientOriginalName();
            $path = 'images/products';
            $request->product_img->move($path, $file_name);
        } else {
            $file_name = $product->product_img;
        }
        $product->supplier_id            = Auth::user()->id;
        $product->product_img            = $file_name;
        $product->product_name           = $request->input('product_name');
        $product->product_price          = $request->input('product_price');
        $product->sale_price             = $request->input('sale_price');
        $product->product_description    = $request->input('product_description');
        $product->product_qty            = $request->input('product_qty');
        $product->category_id            = $request->input('category_id');
        $product->subcategory_id         = $request->input('subcategory_id');
        $product->gift_id                = $request->input('gift_id');
        $product->save();
        $admins = Admin::all();
        Notification::send($admins, new ProductUpdated($product));

        if($request->hasFile('imgs')){
            $files=$request->file('imgs');
            foreach($files as $file){
                $file_name = $request->product_img->getClientOriginalName();
                $path = 'images/products';
                $request->product_img->move($path, $file_name);
                $product->images()->create(['name'=>$file_name]);
            }
        }
        return redirect(route('supplierproducts.index'))->with('success_update','product has been updated successfully!');;



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product       = Product::find($id);
        $product->delete();
        return redirect(route('supplierproducts.index'))->with('success_delete','product has been removed !');
    }


   
   
   
    public function showSubcategory($id){
        $subcategories = Subcategory::where('category_id' ,$id)->pluck('subcategory_name','id');
       return json_encode($subcategories);
    }

    protected function validateProduct()
    {
        return request()->validate([
            'product_name'         => 'required',
            'product_img'          => 'required',
            'product_description'  => 'required',
            'product_price'        => 'required',
            'product_qty'          => 'required',
            'gift_id'              => 'required',
            'subcategory_id'       => 'required',
            'category_id'          => 'required',
        
        ]);
    }


}
