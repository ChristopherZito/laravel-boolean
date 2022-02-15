<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postcard;

class MainController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function getPostcard(){
        $postcards = Postcard::all();
        return json_encode($postcards);
    }
}
