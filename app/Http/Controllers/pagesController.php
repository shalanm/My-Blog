<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use View;

class pagesController extends Controller
{
    public function index()
    {
        if(view::exists('Pages1.index'))
        return view ('Pages1.index' ,['text' =>'<b>laravel</b>'] );
          
                
        
        else 
            return 'no view available';
        
    }
    public function profile()
    {
        return view('Pages1.profile');
    }
    public function settings()
    {
        return view('Pages1.settings' );
    }
    public function blade(){
        $gender = 'male';
        $text = 'Hello there!';
        return view('blade.bladetest' , compact('gender','text'));
        
    }
    
}
