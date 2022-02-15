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

    public function create(){
        return view('pages.create');
    }
    public function store(Request $request){

        // $data = $request -> all();
        // dd($data);


        $data = $request -> validate([

            'sender' => 'required|string',
            'reciver' => 'required|string',
            'text' => 'required|string',
        ]);
        // dd($data);

        $imageFile = $request -> file('image');
        //$data['image']; 

        $imageName = rand(100000, 999999) . '_' . time() 
                    . '.' . $imageFile -> getClientOriginalExtension();

        $imageFile -> storeAs('/myimage/', $imageName , 'public');
        $data['image'] = $imageName;

        $postcard = Postcard::create($data);

        return redirect() -> route('home');
    }
}
