<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;



class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderByDesc('id')->get();
        return view('dashboard.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('dashboard.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
            $this->validateCategory();
            //save photo in to folder
            $file_name = $request->category_img->getClientOriginalName();
            $path      = 'images/categories';
            $request->category_img->move($path, $file_name);
            $category = new Category(request(['category_name']));
            $category->category_img = $file_name;
            $category->save();
            return redirect(route('categories.index'))->with('success_create','category has been created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        if ($request->hasFile('category_img')) {
            
            //save photo in to folder
            $file_name = $request->category_img->getClientOriginalName();
            $path = 'images/categories';
            $request->category_img->move($path, $file_name);
        } else {
            $file_name = $category->category_img;
        } 

        
        $category->category_img = $file_name;
        $category->category_name = $request->input('category_name');
        $category->save();
        return redirect(route('categories.index'))->with('success_update','category has been updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        return redirect(route('categories.index'))->with('success_delete','category has been removed !');
    }


    protected function validateCategory()
    {
        return request()->validate([
            'category_name'  => 'required',
            'category_img'  => 'required',
            


        ]);
    }
}
