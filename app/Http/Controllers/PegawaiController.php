<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftar;


class PegawaiController extends Controller
{
     public function index()
    {
    	$pendaftar = Pendaftar::paginate(10);
        return view('halaman.datapendaftar')->with('pendaftar', $pendaftar);
    }

    public function seleksi()
    {
    	$pendaftar = Pendaftar::paginate(10);
        return view('halaman.seleksi')->with('pendaftar', $pendaftar);
    }

     public function bobot(Request $request) {

    	$pendaftar = Pendaftar::all();

      $bobot_biaya = $request->get('bobot_biaya');
      $bobot_cuaca = $request->get('bobot_cuaca');
    	$bobot_luas = $request->get('bobot_luas');
    	$bobot_jarak = $request->get('bobot_jarak');
      $bobot_waktu = $request->get('bobot_waktu');
      //$min_p = min($pendaftar->biaya);
      $luasP=array();
      $biayaP=array();
      $cuacaP=array();
      $jarakP=array();
      $waktuP=array();
      foreach ($pendaftar as $pendafta) {
        array_push($luasP,$pendafta->luas);
        array_push($biayaP,$pendafta->biaya);
        array_push($cuacaP,$pendafta->cuaca);
        array_push($jarakP,$pendafta->jarak);
        array_push($waktuP,$pendafta->waktu);
      }
      $max_luas = max($luasP);
      $min_biaya = min($biayaP);
      $max_cuaca = max($cuacaP);
      $min_jarak = min($jarakP);
      $min_waktu = min($waktuP);
    	$i=0;

    	foreach ($pendaftar as $yeah) {
    		$id[$i] = $yeah->id;
    		$nama[$i] = $yeah->nama;
    		$biaya[$i] = ($min_biaya / $yeah->biaya) * $bobot_biaya;
    		$cuaca[$i] = ($max_cuaca / $yeah->cuaca) * $bobot_cuaca;
    		$luas[$i] = ($max_luas / $yeah->luas) * $bobot_luas;
    		$jarak[$i] = ($min_jarak / $yeah->jarak) * $bobot_jarak;
        $waktu[$i] = ($min_waktu / $yeah->waktu) * $bobot_waktu;
    		$jumlah[$i] = $biaya[$i] + $cuaca[$i] + $luas[$i] + $jarak[$i] + $waktu[$i];
    		$i+=1;
    	}

         array_multisort($jumlah, SORT_DESC, $id, $nama, $biaya, $cuaca, $luas, $jarak, $waktu, $jumlah);

        return view('halaman.hasilseleksi')->with('nama', $nama)->with('biaya', $biaya)->with('cuaca', $cuaca)->with('luas', $luas)->with('jarak', $jarak)->with('waktu',$waktu)->with('jumlah', $jumlah);
    }
  }
