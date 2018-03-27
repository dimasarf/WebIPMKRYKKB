<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input as Input;
use App\foto;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
      If(Input::hasFile('file')){


            $file = Input::file('file');

            $destinationPath = public_path(). '/uploads/';
            $filename = $file->getClientOriginalName();

            $file->move($destinationPath, $filename);

            echo  $filename;
            //echo '<img src="uploads/'. $filename . '"/>';

            $foto = new foto;
            
            $foto->idalbum = 1;
            $foto->foto = $filename;
            $foto->save();
        }


      }
    }
