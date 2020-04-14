<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller

  {
    
        public function show(){
          $team = Team::all();
           return view('backoffice.teamedit', compact('team'));
        }
     
  //function edit
        public function edit($id){
           $team = Team::find($id);
          return view('edit.teamedit', compact('team'));
   }
    
  //function create
        public function create(){
           
         return view('create.teamcreate');
 }
        public function update($id){
          $team =Team::find($id);
          //On ecrase la donnee que lon a recuperer
          //cibler les colonnes en question
          $team->img_name=request('img_name');
          $team->img_desc=request('img_desc');
          $team->img_path=request('img_path');

          $team->save();
          return redirect()->route('teams');
    


 }

 
      public function store(){
        $team = new Team();
        $team->img_name=request('img_name');
        $team->img_desc=request('img_desc');
        $team ->img_path=request('img_path');
         
        
        $team-> save();
     //il renvoie vers une redirection vers la route de portfolio
     //portfolio cest une route 
      return redirect()->route('teams');
   }
    
 
 public function destroy($id) {
        $team = Team::find($id);
        $team->delete();

        return redirect()->back();

  
}

    }
