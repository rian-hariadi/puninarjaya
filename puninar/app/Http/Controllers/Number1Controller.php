<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB ;

use App\Powerunit ;

use App\Corporations ;

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

		$corporation = Corporations::all() ;


		$location = DB::table('LOCATION')->get() ;
		$type = DB::table('POWER_UNIT_TYPE')->get() ;

		$query1 = Powerunit::all() ;

		dd($corporation);
		
	} 



	public function store(){
		$post = new Powerunit ;

		$array_post = $_POST ;

		foreach ($array_post as $row) {
			$post->$row = request($row) ;
		}
		$post->save() ;

		// $post->POWER_UNIT_NUM = request('POWER_UNIT_NUM') ;
		// $post->DESCRIPTION = request('DESCRIPTION') ;
		// $post->ID_CORPORATION = request('ID_CORPORATION') ;
		// $post->ID_LOCATION = request('ID_LOCATION') ;


		dd($array_post) ;
		return  back() ;

	}



}
