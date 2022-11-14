<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function index(){

        $images = Image::all();
        return view('Images.index', compact('images'));
    }

    public function create(){
        return view('Images.create');
    }

    public function store(Request $request){
        $nameImage = $request->image->getClientOriginalName();

        $image = new Image();

        $image->image = $nameImage;

        $request->image->move(public_path('images'),$nameImage);
        
        $image->save();
        
        return redirect()->route('images.index');
    }

}
