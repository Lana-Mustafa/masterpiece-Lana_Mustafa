<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // to read all list for resource 
       
      
       $admins = Admin::orderByDesc('id')->get();
        return view('dashboard.admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // shows a view to create a new resource
        return view('dashboard.admin.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        /* $this->validateAdmin();
        $admin = new Admin(request(['name','mobile','email']));
        $admin->password =  bcrypt($admin['password']) ;
        $admin->save(); */
        Admin::create($this->validateAdmin());
        return redirect(route('admins.index'))->with('success_create','admin has been created successfully!');;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update( Admin $admin)
    {
        
        $admin->update(request()->validate([
          'name'     => 'required',
          'mobile'   => 'required',
          'email'    => 'required',
    
        ]));
        return redirect(route('admins.index'))->with('success_update','admin has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
        $admin->delete();
        return redirect(route('admins.index'))->with('success_delete','admin has been removed !');;
    }

    protected function validateAdmin(){
        return request()->validate([
          'name'     => 'required',
          'mobile'   => 'required',
          'email'    => 'required',
          'password' => 'required',
  
      ]);
      }
}
