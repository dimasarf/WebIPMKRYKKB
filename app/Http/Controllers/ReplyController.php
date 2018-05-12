<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\komentar;

class ReplyController extends Controller
{
    public function Reply(Request $request,$id)
    {
      $reply = new komentar();
      $reply->reply = $request->reply;
      $reply->nama = $request->nama;
      $reply->tes_konten_id = $id;
      $reply->save();
      return back();
    }
}
