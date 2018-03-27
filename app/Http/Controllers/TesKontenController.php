<?php

namespace App\Http\Controllers;

use App\TesKonten;
use Illuminate\Http\Request;

class TesKontenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('PostContent');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detail = $request->summernoteInput;
        $dom = new \domdocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getelementsbytagname('img');


        foreach ($images as $k => $img)
        {
          $data = $img->getattribute('src');

          list($type, $data) = explode(';', $data);
          list(,$data) = explode(',',$data);

          $data = base64_decode($data);
          $image_name = time().$k.'png';
          $path = public_path().'/'.$image_name;

          file_put_contents($path, $data);
          $img->setattribute('src',$image_name);
        }
        $detail = $dom->savehtml();
        $konten = new TesKonten();
        $konten->konten = $request->summernoteInput;
        $konten->judul = $request->judul;
        $konten->save();
        return Redirect('/Dashboard-Postingan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TesKonten  $tesKonten
     * @return \Illuminate\Http\Response
     */
    public function show(TesKonten $tesKonten)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TesKonten  $tesKonten
     * @return \Illuminate\Http\Response
     */
    public function edit(TesKonten $tesKonten)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TesKonten  $tesKonten
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TesKonten $tesKonten)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TesKonten  $tesKonten
     * @return \Illuminate\Http\Response
     */
    public function destroy(TesKonten $tesKonten)
    {
        //
    }
}
