<?php

namespace App\ImageGestion;

use Illuminate\Http\UploadedFile;

interface ImageGestionInterface
{

    public function save(UploadedFile $file);

}