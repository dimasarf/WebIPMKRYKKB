<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\anggota;
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
      $pengurus = anggota::like('namaLengkap',$keyWord)->get();
      return view('TblCari',compact('pengurus','persentasePengurus','persentaseAnggotaBiasa'))->render();
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
      $pengurus = anggota::where(['keanggotaan' => 'pengurus'])->paginate(15);
      return view('TblPengurus',compact('pengurus','persentasePengurus','persentaseAnggotaBiasa'));
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
      $hasil = ($pengurus / $anggota) * 100;
      return $hasil;
    }

    public function PersentaseAnggotaBiasa()
    {
      $anggota = $this->HitungAnggota();
      $anggotaBiasa = $this->HitungAnggotaBiasa();
      $hasil = ($anggotaBiasa / $anggota) * 100;
      return $hasil;
    }

}
