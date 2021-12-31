<?php

namespace App\Http\Controllers;

use App\Models\Schemes;
use Illuminate\Http\Request;

class SchemesController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $scheme = new Schemes;
        $scheme->schemes_name = $request->input('inputscheme');
        $scheme->status = 1;
        $scheme->save();

        $request->session()->put('schemes',$scheme);
        
        return redirect('/addprojectdetails',)->with('schemeCreated','scheme created successfully');
        
      
    }

    public function show(Schemes $schemes)
    {
        //
    }

    public function edit(Schemes $schemes)
    {
        //
    }

    public function update(Request $request, Schemes $schemes)
    {
        //
    }

    public function destroy(Schemes $schemes)
    {
        //
    }
}
