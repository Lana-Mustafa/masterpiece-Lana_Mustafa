<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class SupplierProfileController extends Controller
{
    /**
     * Show the form for editing supplier profile
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    { 
       return view('customized_dashboard.editProfile');
    }

    /**
     * Update the authenticate Supplier Profile
     *
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request)
    {
        $this->validateSupplier();
       // save the profile update
      
       $this->supplier         =  Auth::user();
       
       if ($request->hasFile('img')) {
        //save photo in to folder
        $file_name = $request->img->getClientOriginalName();
        $path = 'images/suppliers';
        $request->img->move($path, $file_name);
    }else {
        $file_name = $this->supplier->img;
    } 
       
        $this->supplier->img         =  $file_name;
        $this->supplier->name        =  $request['name'];
        $this->supplier->email       =  $request['email'];
        $this->supplier->mobile      =  $request['mobile'];
        $this->supplier->description =  $request['description'];
        $this->supplier->save();
       
        return redirect(route('supplier.dashboard'))->with('success','your profile has been updated successfully!');
    }

    /**
     * Show the form for changing password
     *
     * @return \Illuminate\Http\Response
     */
    public function changePasswordForm()
    {
        return view('customized_dashboard.changePassword');
    }

    /**
     * Change password for authenticated supplier
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changePassword(Request $request)
    
    {
 
      
        if (!(Hash::check($request->get('current_password'),Auth::user()->password))){
             return back()->with('error','Your current password does not match what you provided');
        }
        
        if( strcmp($request->input('new_password'),$request->input('current_password')) == 0){
            return back()->with('error','Your current password can not be the same with new password');
        }
        $this->validatePassword(); 
        $this->supplier= Auth::user();
        $this->supplier->password = $request->get('new_password');
        $this->supplier->save();
        return redirect(route('supplier.dashboard'))->with('success','your password has been changed successfully!');
        
    }

    
   
    protected function validateSupplier(){
        return request()->validate([
          'name'         => 'required',
          'mobile'       => 'required',
          'email'        => 'required',
          'description'  => 'required',
          
  
      ]);}
    
      protected function validatePassword(){
        return request()->validate([
          'current_password'=> ['required'],
          'new_password'    => ['required','confirmed'],
         
          
  
      ]);
    
        }
    
    




}
