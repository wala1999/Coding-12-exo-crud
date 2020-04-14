<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
$about = \App\About::findOrFail($id);
class AboutController extends Controller
{
    public function show(){
       
        $about=about::all();
        return view('backoffice.aboutedit',compact('about'));
    }

    public function create(){
        $about = about::find();
        $about-> titre2=request('titre2');
        $about-> description2=request('description2');
        $about-> img_about=request('img_about');
 
$about-> save();
       return redirect()->route('about');
}  
    public function update($id){
        $about = about::find($id);
        $about-> titre2=request('titre2');
        $about-> description2=request('description2');
        $about-> img_about=request('img_about');
 
$about-> save();
       return redirect()->route('about');
}  

public function destroy($id)
{
    About::find($id)->delete();
    return redirect()->back();
}



}
