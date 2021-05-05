<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use App\Models\Order;
use App\Models\Image;
use App\Models\Cart;
use App\Models\Supplier;
use Illuminate\Support\Facades\Auth;
use Cartalyst\Stripe\Laravel\Facades\Stripe;


class PublicController extends Controller
{
    /* Public Methods */

/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

public function index()
{
    
    $popular_categories =  Category::take(5)->get();
    $suppliers          =  Supplier::take(3)->get() ;
    $new_products       =  Product::where('status',1)->latest()->limit(12)->get();
    $sale_products      =  Product::where('status',1)->whereNotNull('sale_price')->limit(12)->get();
    

    return view('public_site.index', compact('popular_categories','new_products','sale_products','suppliers')); 
    
}
 

/**
     * Show the Shop page for all products
     *
     * @return \Illuminate\Http\Response
     */
    public function showShop()
    {
        
        $products  =  Product::where('status',1)->latest()->paginate(6);
        
        return view('public_site.shop', compact('products'));
    }

/**
     * Search Method
     *
     * @return \Illuminate\Http\Response
     */
    public function search( Request $request) {

        $request->validate([

            'q' => 'required'
        ]);


        $search = $request->input('q' );
        $search =  '%' . $search . '%';
        $filteredProducts = Product::where( 'product_name',  'LIKE',  $search )->paginate(6);
        
        if ($filteredProducts->count()) {

            return view('public_site.shop')->with([
                'products' =>  $filteredProducts
            ]);
        } else {
            
            return redirect()->route('shop')->with([
                'status' => 'search failed ,, please try again'
            ]);
        }
        
    }

/**
     * Show the Shop by Category page 
     *
     * @return \Illuminate\Http\Response
     */
    public function showShopByCategory($id)
    {
        $category  =  Category::find($id);
        $products  =  Product::where('status',1)->where('category_id', $id)
                       ->join('categories','products.category_id','=','categories.id')
                       ->select('products.*','categories.category_name')->latest()->paginate(6);
        
        return view('public_site.shopByCategory', compact('products','category'));
    }

/**
     * Show the Shop by subcategory page 
     *
     * @return \Illuminate\Http\Response
     */
    public function showShopBySubcategory($id)
    {

        $subcategory    =  Subcategory::where('id', $id )->first();
        $products       =  Product::where('status',1)->where('subcategory_id', $id)->latest()->paginate(6);
        
        return view('public_site.shopBySubcategory', compact('products','subcategory'));
    }


/**
     * Show the Single Product Page 
     *
     * @return \Illuminate\Http\Response
     */
    public function showSingleProductPage($id)
    {
        //dd(url()->previous()) ;
        $product          =  Product::find($id);
        $gallery          =  Image::where('product_id', $id)->get();
        $supplierproducts = Product::where('status',1)->where('supplier_id',$product->supplier_id)->where('id','!=',$product->id)->latest()->take(4)->get(); 
        $relatedproducts  = Product::where('status',1)->where('category_id',$product->category_id)->where('id','!=',$product->id)->latest()->take(4)->get(); 
        return view('public_site.singleProductPage', compact('product','gallery','supplierproducts','relatedproducts'));
    }

/**
     * Show the Sellers Page 
     *
     * @return \Illuminate\Http\Response
     */
    public function showSellers()
    {
        //dd(url()->previous()) ;
        $suppliers = Supplier::paginate(6);
        return view('public_site.sellers', compact('suppliers'));
    }


/**
     * Show the Seller Page 
     *
     * @return \Illuminate\Http\Response
     */
    public function showSeller($id)
    {
        //dd(url()->previous()) ;
        $supplier = Supplier::find($id);
        $supplierproducts = Product::where('status',1)->where('supplier_id',$supplier->id)->latest()->paginate(3); 
        return view('public_site.seller', compact('supplier','supplierproducts'));
    }


    /**
     * Add to Cart 
     *
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Product $product) {
        
        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = new Cart();
        }
        $cart->add($product);
        //dd($cart);
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product was added');
    }

/**
     * Show Cart Page 
     *
     * @return \Illuminate\Http\Response
     */

    public function showCart() {

        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
            
        } else {
            $cart = null;
        }
       $products = Product::take(4)->get();
        return view('public_site.cart', compact('cart', 'products'));
    }

      /**
        Show Checkout Page

      **/
    public function checkout($amount)
    {
        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = null;
        }
        return view('public_site.checkout',compact('amount','cart'));
    }


    /**
     *Submit charge
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function charge(Request $request) {

        //dd($request->stripeToken);
       
        $charge = Stripe::charges()->create([
            'currency' => 'USD',
            'source' => $request->stripeToken,
            'amount'   => $request->amount,
            'description' => ' Test from laravel new app'
        ]);

        $chargeId = $charge['id'];

        if ($chargeId) {
            // save order in orders table ...
            $order = new Order();
            $order->cart = serialize( session()->get('cart'));
            $order->address = $request->input('address');
            $order->name = $request->input('name');
            $order->payment_id = $chargeId;
            Auth::user()->orders()->save($order);
              // clean cart 
            session()->forget('cart');  
            return redirect()->route('shop')->with('success', " Payment was done. Thanks");
        } else {
            return redirect()->back();
        }
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
        $request->validate([
            'qty' => 'required|numeric|min:1'
        ]);

        $cart = new Cart(session()->get('cart'));
        $cart->updateQty($id, $request->qty);
        session()->put('cart', $cart);
        return redirect()->route('cart.show')->with('success', 'Product updated');
    }

    /**
     * Remove the specified product from cart.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = new Cart( session()->get('cart'));
        $cart->remove($id);

        if( $cart->totalQty <= 0 ) {
            session()->forget('cart');
        } else {
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.show')->with('success', 'Product was removed');
    }

    

}
