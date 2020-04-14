<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{

  public function show(){
    $testimonial = Testimonial::all();
   return view('backoffice.edittestimonial', compact('testimonial'));
}

public function deleteTestimonial($id){
  $testimonials= Testimonial::find($id);
  return view ('backoffice.edittestimonial',
  compact('testimonials'));


}
public function editTestimonial($id){
  $testimonials= Testimonial::find($id);
  return view ('backoffice.edittestimonial',
  compact('testimonials'));


}

//envoi du formulaire

public function updateTestimonial($id){
    $testimonials= Testimonial::find($id);
    $testimonials ->name=request('name');
    $testimonials ->commentaire=request('commentaire');
    $testimonials ->job=request('job');
    $testimonials ->text=request('text');
    $testimonials ->img_profil=request('img_profil');
 
    $testimonials ->save();

    return redirect()->route('Backoffice');

}
}
   