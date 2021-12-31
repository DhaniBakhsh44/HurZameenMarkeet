<?php

use Illuminate\Support\Facades\Route;


//use Illuminate\Support\Facades\Mail;
//use App\Mail\MailNotify;
//use \App\Mail\sendMail;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



// Route::get('/profile',function(){
//     return view('/admin/profile');
//});



Route::group(['middleware'=>['secureLogin']],function(){
    Route::get('/login',function(){
        if(session()->has('admin'))
        {
            return view('admin/dashboard');
        }else
        return view('/admin/login');
    });
});

Route::get('/logout',function(){
    if(session()->has('admin')){
        Session::flush();

    }
    return redirect('/login');
});


Route::post('/dashboard','App\Http\Controllers\AdminController@logIn'); 
  Route::group(['middleware'=>['customAuth']],function(){
     
  
    Route::get('/dashboard',function(){
        return view('/admin/dashboard');
        //return view('welcome');
    });
    
    Route::get('/profile',function(){
    return view('/admin/profile');
    });

    
    
     
     //Route::post('/dashboard','App\Http\Controllers\AdminController@logIn');

     // AdminController 
     Route::post('/addadmin','App\Http\Controllers\AdminController@store');
     Route::post('/updateadmin','App\Http\Controllers\AdminController@update');
    
      Route::get('/newadmin',function(){
        if(session()->has('admin')){
        return view('/admin/newadmin');
        }else return view('/admin/login');
        
    });
    
   

    //SchemeContextController
     Route::get('/addprojectdetails','App\Http\Controllers\SchemeContextController@index');
     Route::post('/createscheme','App\Http\Controllers\SchemesController@store');
     Route::post('/setschemeid','App\Http\Controllers\SchemeContextController@setSchemeId');
     Route::post('ckeditor/image_upload', 'App\Http\Controllers\SchemeContextController@upload')->name('upload');
     Route::post('/ckdatastore', 'App\Http\Controllers\SchemeContextController@store');
     Route::get('/updateprojectdetails','App\Http\Controllers\SchemeContextController@updateSchemeContext');
     Route::post('/update','App\Http\Controllers\SchemeContextController@update');
     Route::get('/viewrunningproject','App\Http\Controllers\SchemeContextController@viewRunningProject');
     Route::delete('/deleteproject/{id}','App\Http\Controllers\SchemeContextController@destroy');

    });     



 
 Route::get('/index','App\Http\Controllers\MainWebController@index');
 Route::get('/about','App\Http\Controllers\MainWebController@aboutus');
 Route::get('/reviews','App\Http\Controllers\MainWebController@reviews');
 Route::get('/contact','App\Http\Controllers\MainWebController@contact');
 Route::get('/schemedetails/{id}','App\Http\Controllers\MainWebController@schemedetails');
Route::post('/sendmail','App\Http\controllers\MainWebController@sendMail');


 
 Route::get('/sendmail', function (){
   $msg = [
    'title'=>'Mail From Customer',
    'body'=> 'This is form test eamil using dslfsdflskdfljsmtp'
   ] ;

   \Mail::to('dhanibakhsh@outlook.com')->send(new \App\Mail\TestMail($msg));
   echo 'mail send';
 });

// ADMIN ROUTE
// Route::get('/addprojectdetails','App\Http\Controllers\SchemeContextController@index');
// Route::post('/dashboard','App\Http\Controllers\AdminController@logIn');
// Route::post('/addadmin','App\Http\Controllers\AdminController@store');
// Route::post('/createscheme','App\Http\Controllers\SchemesController@store');
// Route::post('/setschemeid','App\Http\Controllers\SchemeContextController@setSchemeId');
// Route::post('ckeditor/image_upload', 'App\Http\Controllers\SchemeContextController@upload')->name('upload');
// Route::post('/ckdatastore', 'App\Http\Controllers\SchemeContextController@store');
// Route::get('/updateprojectdetails','App\Http\Controllers\SchemeContextController@updateSchemeContext');
// Route::post('/update','App\Http\Controllers\SchemeContextController@update');

//Route::post('/ckdataupdate', 'App\Http\Controllers\SchemeContextController@update');