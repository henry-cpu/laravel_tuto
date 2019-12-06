<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImagesRequest;
use App\ImageGestion\ImageGestionInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{

    protected $imageManager;


    public function __construct(ImageGestionInterface $imageGestion)
    {
        $this -> imageManager = $imageGestion;
    }

    public function getForm() {

       return view('photo');
    }

    public function postForm(ImagesRequest $request) {

        if(!$this -> imageManager -> save($request->file('foto'))) {
            return redirect('photo')->with('fehler beim uploads');
        }
        return view('photo_ok');

        /*
        $file = $request -> file('foto');
        $fileName = 'image-.'.time().'.'.$file->getClientOriginalExtension();
        $path = $file -> storeAs('uploads', $fileName);
        return view('photo_ok');
        */



        //!d($path);
        //die();
        //$path = $request -> file('foto') -> store('uploads');
        //Storage::disk('local')->put($fileName, $file);

    }
}
