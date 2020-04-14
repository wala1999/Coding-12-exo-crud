<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function show()
    {
   $services=Service::all();
   return view('backoffice.serviceedit',compact('services'));
}
public function create()
{
    //dd("coucou");
    return view('create.servicecreate2');
}

public function edit()
{

}
public function store()
{
    $service = new Service();
    $service->titre=request('titre');
    $service->description=request('description');

 
   $service-> save();
  //il renvoie vers une redirection vers la route de portfolio
  //portfolio cest une route 
   return redirect()->route('service');

}

 
public function destroy($id) {
    $service = Service::find($id);
    $service->delete();

    return redirect()->back();


}
}
