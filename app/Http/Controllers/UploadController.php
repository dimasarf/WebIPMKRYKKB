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


            $files = Input::file('file');
            foreach ($files as $file ) {
              $destinationPath = public_path(). '/uploads/';
              $filename = $file->getClientOriginalName();

              $file->move($destinationPath, $filename);
              $foto = new foto;

              $foto->album_id = $request->album;
              $foto->foto = $filename;
              $foto->save();
            }
            return Redirect('/Dashboard-Galeri');
        }
      }

      public function deleteFoto($idfoto)
      {
        $foto = foto::find($idfoto);
        $foto->delete();
        return back();
      }
  }
