<?php

namespace App\Http\Controllers;

use App\Models\SchemesContext;
use App\Models\Schemes;
use Illuminate\Http\Request;
//use Illuminate\Filesystem\Filesystem;
use File;

class SchemeContextController extends Controller
{
    public function index(){
        $scheme = Schemes::all();
     return view('admin.addschemedetails',['schemes'=>$scheme]);
    }

    public function setSchemeId(Request $request){
      $schemeId = $request->session()->put('scheme_id',$request->scheme_id);
      // Data return for updateschemedaitails view for update context'
    //   $schemeContext = SchemesContext::all();
      $schemeContext = SchemesContext::where('scheme_id',$request->scheme_id)->get();
      //where('scheme_id',$schemeId)->get();
      return response()->json($schemeContext);
    }       
    
    public function upload(Request $request){
    $scheme_id = $request->session()->get('scheme_id');
    if($scheme_id==0){
        return '<script type="text/javascript">alert("Kindly Select Project ");</script>';
        $request->session()->pull('scheme_id');
    }else if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();
      
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
      
            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();
      
            //filename to store
            $filenametostore = rand(11111, 99999).'_'.time().'.'.$extension;

            //Scheme_id from session
           // $filename.
            //rand(11111, 99999)
            //Upload File
            $request->file('upload')->storeAs('public/uploads/'.$scheme_id, $filenametostore);
 
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/uploads/'.$scheme_id.'/'.$filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
             
            // Render HTML output
            //@header('Content-type: text/html; charset=utf-8');
            //$request->session()->pull('scheme_id');
            echo $re;
        }

    }

  public function create(){
        
    }

    public function store(Request $request){
       $scheme_id = $request->session()->get('scheme_id');
       try{
 
       
       $schemeContext = new SchemesContext;
       $schemeContext->scheme_id = $scheme_id;
       $schemeContext->context = $request->data;
       $schemeContext->status=1;
       $schemeContext->save();

       return $schemeContext->scheme_id;
       }catch(\Exception $ex){

           return "updateprojectdetails";
       }
    }


    //use for return updateschemedetails view 
    public function updateSchemeContext(){
        $schemes = Schemes::all();
        return view ('admin/updateschemedetails',['schemes'=>$schemes]);
     
    }


    public function update(Request $request, SchemesContext $schemesContext)
    {
        $schemeContext = SchemesContext::where('scheme_id','=',$request->scheme_id)->update(['context' =>$request->data]);
        return "UpdateSuccessfully";
    }

    public function viewRunningProject(){
        $schemes = Schemes::all();
        return view ('admin/viewrunningproject',['schemes'=>$schemes]);

    }

    public function show(SchemesContext $schemesContext)
    {
        //
    }

    public function edit(SchemesContext $schemesContext)
    {
        //
    }


    public function destroy($scheme_id)
    {
        
         $schemeContext = SchemesContext::where('scheme_id',$scheme_id)->delete(); 
         $schemes = Schemes::where('scheme_id',$scheme_id)->delete();


         
         if (\File::exists("storage/uploads/".$scheme_id)){
            File::deleteDirectory(public_path("storage/uploads/'".$scheme_id."'"));
          return "Delete Sucessfully.."; 

         }

         if (isset($schemeContext->scheme_id) && isset($scheme->id)){
            return "Delete Sucessfully.."; 
        }else
            return "Cant Not Be  Delete...".$schemeContext->scheme_id;
        

         
          
       
     }
}
