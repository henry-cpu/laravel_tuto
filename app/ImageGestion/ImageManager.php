<?php


namespace App\ImageGestion;


use Illuminate\Http\UploadedFile;

class ImageManager implements ImageGestionInterface
{

    public function save( UploadedFile $file ){

        if(!$file -> isValid()) {
            return false;
        }

        $fileName = 'image-.'.time().'.'.$file->getClientOriginalExtension();
        $path = $file -> storeAs('uploads', $fileName);
        return true;
    }

}