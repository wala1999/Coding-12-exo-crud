<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function show(){
       $contacts=Contact::all();
        return view('Contact.contactData',compact(contacts));
    }
    public function store(){
       $contact=new Contact();
       $contact->name=request('name');
       $contact->email=request('mail');
       $contact->subject=request('subject');
       $contact->message=request('message');


       $contact->save();
      

        return redirect()->route('main');
    }
    public function destroy($id){
        Contact::where('id',$id)->delete();
         return redirect()->back();
     }




}
