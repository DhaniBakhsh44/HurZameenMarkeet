<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Schemes;
//use App\Models\SchemesContext;
use App\Models\SchemesContext;
use App\Mail\sendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


class MainWebController extends Controller
{

    public function index(){
        $scheme = Schemes::all();
        return view('index',['schemes'=>$scheme]);
    }

    public function aboutus(){
        $scheme = Schemes::all();
        return view('about',['schemes'=>$scheme]);
    }

    
    public function reviews(){
        $scheme = Schemes::all();
        return view('review',['schemes'=>$scheme]);
    }
    public function contact(){
       $scheme = Schemes::all();
        return view('contacts',['schemes'=>$scheme]);
    }
    public function schemedetails(Request $request){
        $schemes = Schemes::all();
        $schemeId = $request->id;
       $schemeContext = SchemesContext::where('scheme_id',$schemeId)->get();
        return view ('schemedetails', compact('schemes','schemeContext'));    
    }

    public function sendMail(Request $request){
        $this->validate($request,[

            'name'=>'required',
            'phone_number'=>'required',
            'email'=>'required',
            'message'=>'required'
            
        ]);
        $name=$request->input("name");
        $phone=$request->input("phone_number");
        $email=$request->input("email");
        $query=$request->input("message");
       

        $msg= [

            'name'=>$name,
            'phone_number'=>$phone,
            'email'=>$email,
            'query'=>$query

           ] ;
        
           \Mail::to('dhanibakhsh@outlook.com')->send(new \App\Mail\TestMail($msg));
           
           if (Mail::failures()) {
           return "error-message";
            }else{
                return 'success-message';
            }

    }


}