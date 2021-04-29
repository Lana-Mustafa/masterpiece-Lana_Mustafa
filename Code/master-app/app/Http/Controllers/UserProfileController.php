<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    /**
     * Show the form for editing User Account
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    { 
       return view('editProfile');
    }


    /**
     * Update the authenticate User Profile
     *
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request)
    {
        $this->validateUser();
       // save the profile update
      
       $this->user     =  Auth::user();
       
       if ($request->hasFile('img')) {
        //save photo in to folder
        $file_name = $request->img->getClientOriginalName();
        $path = 'images/users';
        $request->img->move($path, $file_name);
    }else {
        $file_name = $this->user->img;
    } 
       
        $this->user->img         =  $file_name;
        $this->user->name        =  $request['name'];
        $this->user->email       =  $request['email'];
        $this->user->mobile      =  $request['mobile'];
        $this->user->save();
       
        return redirect(route('home'))->with('success','your profile has been updated successfully!');
    }

/**
     * Show the form for changing password
     *
     * @return \Illuminate\Http\Response
     */
    public function changePasswordForm()
    {
        return view('changePassword');
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
        $this->user= Auth::user();
        $this->user->password = $request->get('new_password');
        $this->user->save();
        return redirect(route('home'))->with('success','your password has been changed successfully!');
        
    }










    protected function validateUser(){
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
