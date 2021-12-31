<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
     public function logIn(Request $req)
    {
        $email = $req["email"];
        $pass = $req["pass"];
        //$pass = Hash::make($password); 
        
        $data = Admin::where('email','=',$email)->first();
        if ($data!=null && Hash::check($pass,$data->password)){
            $req->session()->put('admin',$data); 
            return view('admin/dashboard');

        }else
        return redirect()->back()->with('false', 'email and password does not match');  
       
         }
    
   
       public function store(Request $request)
    {
        // This method used for createing new admin 
        $admin = new Admin;
         $admin->name=$request->input('name');
         $admin->email=$request->input('email');
         $admin->password=Hash::make($request->input('pass'));
         $admin->save();
      
         return  $admin;

    }

        public function edit(Admin $admin)
    {
        //
    }

        public function update(Request $request, Admin $admin)
    {
        $id = $request->input('id');
        $newname= $request->input('name');
        $newpassword = $request->input('newpass');
        $oldpass = $request->input('oldpass');
        //echo $id."- ".$newname."- ".$oldpass." -".$newpassword;

        
         $admin = Admin::find($id);
        
        if ($admin!=null && Hash::check($oldpass,$admin->password)){   
            $admin->name = $newname;
            $admin->password = Hash::make($newpassword);
            $admin->save();
            return "Password is Matched";
        }else
            return "Password is not matach Controller";
        //return "Password Update Successfully";

    }

     public function destroy(Admin $admin)
    {
        
    }



}
