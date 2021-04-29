<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class AdminProfileController extends Controller
{
    /**
     * Show the form for editing supplier form
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    { 
       return view('dashboard.editProfile');
    }

    /**
     * Update the authenticate Supplier Profile
     *
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request)
    {
        $this->validateAdmin();
       // save the profile update
      
        $this->admin           =  Auth::user();
        $this->admin->name     =  $request['name'];
        $this->admin->email    =  $request['email'];
        $this->admin->mobile   =  $request['mobile'];
        
        $this->admin->save();
       
        return redirect(route('admin.dashboard'))->with('success','your profile has been updated successfully!');
       
    }

    /**
     * Show the form for changing password
     *
     * @return \Illuminate\Http\Response
     */
    public function changePasswordForm()
    {
        return view('dashboard.changePassword');
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
        $this->admin= Auth::user();
        $this->admin->password = $request->get('new_password');
        $this->admin->save();
        return redirect(route('admin.dashboard'))->with('success','your password has been changed successfully!');    
    }

    
   
    protected function validateAdmin(){
        return request()->validate([
          'name'         => 'required',
          'mobile'       => 'required',
          'email'        => 'required',
          
          
  
      ]);}
    
      protected function validatePassword(){
        return request()->validate([
          'current_password'=> ['required'],
          'new_password'    => ['required','confirmed'],
         
          
  
      ]);
    
        }
    
    




}
