<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {

        $posts =[
            [
                'id' => 1,
                'title' =>'tite 1',
                'body' => 'body 1'
            ],
            [
                'id' => 2,
                'title' =>'tite 2',
                'body' => 'body 2'
            ],
            [
                'id' => 3,
                'title' =>'tite 3',
                'body' => 'body 3'
            ]
            ];
        
    
        return view('home')->with([
            'posts' => $posts
            
        ]);
        
    }
}
