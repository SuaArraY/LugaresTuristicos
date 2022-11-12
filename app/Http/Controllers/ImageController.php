<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function index(){
        return view('Images.index');
    }

    public function create(){
        return view('Images.create');
    }

    public function store(Request $request){
        $getImage = $request->image->getClientOriginalName();

        $image = new Image();

        $image->image = $getImage;

        $image->save();

        return redirect()->to('/images');
    }

}
