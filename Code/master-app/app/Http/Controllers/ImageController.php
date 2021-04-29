<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $imgs = Image::where('product_id',$id)->orderByDesc('id')->get();
        return view('customized_dashboard.img.index', compact('imgs','product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $img = Image::find($id); ;
        return view('customized_dashboard.img.edit',compact('img'));
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
        $img = Image::find($id);
        if ($request->hasFile('name')) {
            //save photo in to folder
            $file_exetension = $request->name->getClientOriginalExtension();
            $file_name = time() . "." . $file_exetension;
            $path = 'images/products';
            $request->name->move($path, $file_name);
        } else {
            $file_name = $img->name;
        }
        
        $img->name  = $file_name;
        $img->save();
        return redirect(route('images.show',$img->product_id));
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $img  = Image::find($id);
        $img->delete();
        return redirect(route('images.show',$img->product_id));
    }
}
