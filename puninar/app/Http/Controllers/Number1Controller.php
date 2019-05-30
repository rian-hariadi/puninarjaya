<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB ;

use App\Powerunit ;

class Number1Controller extends Controller
{
    //
	public function index(){
		$soal = 'Buatlah form CRUD (Create, Read, Update, Delete) untuk form Truck. Form ini digunakan
		untuk memasukkan data ke tabel transaksi “POWER_UNIT” dan mengambil data dari tabeltabel master (CORPORATION, LOCATION, POWER_UNIT_TYPE).' ;

		return view('number1', ['soal' => $soal] ) ;
	}


	public function seeAllTable(){
		//$query1 = DB::table('POWER_UNIT')->get() ;
		$query1 = Powerunit::all() ;

		dd($query1);
	} 



}
