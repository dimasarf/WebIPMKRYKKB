<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\anggota;
use App\TesKonten;
use Excel;

class DashboardController extends Controller
{
    public function index()
    {
      $anggota = $this->HitungAnggota();
      $pengurus = $this->HitungPengurus();
      $anggotaBiasa = $this->HitungAnggotaBiasa();
      $anggotas = anggota::orderBy('id','desc')->paginate(2);
      $persentasePengurus = $this->PersentasePengurus();
      $persentaseAnggotaBiasa = $this->PersentaseAnggotaBiasa();
      return view('Dashboard',compact('anggota','pengurus','anggotaBiasa','anggotas', 'persentasePengurus','persentaseAnggotaBiasa'));
    }

    public function indexPostingan()
    {
      $totalKonten = $this->HitungTotalKonten();
      $kontens = TesKonten::orderBy('created_at','desc')->paginate(5);
      $persentasePengurus = $this->PersentasePengurus();
      $persentaseAnggotaBiasa = $this->PersentaseAnggotaBiasa();
      return view('PostDashboard',compact('kontens','totalKonten' ,'persentasePengurus','persentaseAnggotaBiasa'));
    }

    public function ExportPengurus()
    {
      $pengurus = $pengurus = anggota::where(['keanggotaan' => 'pengurus'])->get();
      return Excel::create('DataPengurus',function($excel) use ($pengurus){
        $excel->sheet('sheetPengurus',function($sheet) use ($pengurus){
          $sheet->fromArray($pengurus);
        });
      })->download('xls');
    }

    public function Search(Request $request)
    {

      $persentasePengurus = $this->PersentasePengurus();
      $persentaseAnggotaBiasa = $this->PersentaseAnggotaBiasa();
      $keyWord = $request->keyWord;
      $anggota = anggota::like('namaLengkap',$keyWord)->paginate();
      return view('TblAnggotaBiasa',compact('anggota','persentasePengurus','persentaseAnggotaBiasa'))->render();
    }

    public function ExportAnggotaBiasa()
    {
      $anggota = $anggota = anggota::where(['keanggotaan' => 'anggota'])->get();
      return Excel::create('DataAnggotaBiasa',function($excel) use ($anggota){
        $excel->sheet('sheetAnggotaBiasa',function($sheet) use ($anggota){
          $sheet->fromArray($anggota);
        });
      })->download('xls');
    }

    public function indexPengurus()
    {
      $persentasePengurus = $this->PersentasePengurus();
      $persentaseAnggotaBiasa = $this->PersentaseAnggotaBiasa();
      $anggota = anggota::where(['keanggotaan' => 'pengurus'])->paginate(15);
      return view('TblAnggotaBiasa',compact('anggota','persentasePengurus','persentaseAnggotaBiasa'));
    }

    public function indexAnggotaBiasa()
    {
      $persentasePengurus = $this->PersentasePengurus();
      $persentaseAnggotaBiasa = $this->PersentaseAnggotaBiasa();
      $anggota = anggota::where(['keanggotaan' => 'anggota'])->paginate(4);
      return view('TblAnggotaBiasa',compact('anggota','persentasePengurus','persentaseAnggotaBiasa'))->render();
    }

    public function HitungAnggota()
    {
      $hasil = anggota::count();
      return $hasil;
    }
    public function HitungTotalKonten()
    {
      $hasil = TesKonten::count();
      return $hasil;
    }
    public function HitungPengurus()
    {
      $hasil = anggota::where(['keanggotaan'=>'pengurus'])->get()->count();
      return $hasil;
    }

    public function HitungAnggotaBiasa()
    {
      $hasil = anggota::where(['keanggotaan'=>'anggota'])->get()->count();
      return $hasil;
    }

    public function PersentasePengurus()
    {
      $anggota = $this->HitungAnggota();
      $pengurus = $this->HitungPengurus();
      if($anggota > 0 )
      {
        $hasil = ($pengurus / $anggota) * 100;
        return $hasil;
      }
      else
      {
        $hasil = 0;
        return $hasil;
      }

    }

    public function PersentaseAnggotaBiasa()
    {
      $anggota = $this->HitungAnggota();
      $anggotaBiasa = $this->HitungAnggotaBiasa();
      if($anggota > 0 )
      {
        $hasil = ($anggotaBiasa / $anggota) * 100;
        return $hasil;
      }
      else
      {
        $hasil = 0;
        return $hasil;
      }

    }

}
