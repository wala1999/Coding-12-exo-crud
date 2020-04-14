<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Portfolio;
use App\Service;
use App\User;
use App\Team;


class WelcomeController extends Controller
{
    public function show()
    {
        return view('welcome');
    }
    public function index(){
           $abouts=About::all();
           $portfolios=Portfolio::all();
           $services=Service::all();
           $teams=Team::all();


        return view('welcome',compact('portfolios','services','teams','abouts'));
           
    }
    

}
