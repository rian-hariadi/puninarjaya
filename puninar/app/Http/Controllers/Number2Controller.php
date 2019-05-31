<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB ;


class Number2Controller extends Controller
{
    //
    public function index(){
		$soal = 'Tampilkan maps lengkap dengan data Truck beserta dengan lokasi terakhir dan juga jumlah
dan detail truk di masing-masing lokasinya (lokasi dapat dilihat pada tabel LOCATION).
Referensi: https://www.puninar.com/networks' ;


	
	 $thelocation = "[
						[
				'Nagrak Office', 
				'Jl. Inspeksi Cakung Drain Nagrak Jakarta 14260' ,
				'networks1', 
				-6.1395921,106.9414434, 
				'mapClick1'
			]
			,			[
				'Alam Sutera Office', 
				'Jl. Jalur Sutra RJS Spectra Blok 23C No. 1. Kel. Penunggangan, Kec. Pinang, Alam Sutra  Tangerang  15145' ,
				'networks2', 
				-6.2299608,106.6570664, 
				'mapClick2'
			]
			,			[
				'Soekarno-Hatta  Office', 
				'Blok J Lot 2A, Soewarna Business Park, Soekarno Hatta International Airport Jakarta  19110' ,
				'networks3', 
				-6.125556, 106.655833, 
				'mapClick3'
			]
			,			[
				'West Java', 
				'Jl. Nanjung No 136 Cimahi Selatan   Cimahi  40533' ,
				'networks4', 
				-6.9137398,107.5367451, 
				'mapClick4'
			]
			,			[
				'Central Java', 
				'Kawasan Industri Wijaya Kusuma Jl. Tugu Industri I/II  Semarang 50257' ,
				'networks5', 
				-6.9718536,110.3367158, 
				'mapClick5'
			]
			,			[
				'East Java', 
				'Jl. Perak Barat No 51  Surabaya 60144 ' ,
				'networks6', 
				-7.2297755,112.7272408, 
				'mapClick6'
			]
			,			[
				'Balikpapan Office ', 
				'Jl. Pulau Balang Km. 1,5. Kel. Karang Joang, Kec. Balikpapan Utara,  Balikpapan  76136' ,
				'networks7', 
				-1.1413834,116.8773894, 
				'mapClick7'
			]
			,			[
				'Banjarmasin Office ', 
				'Jalan AES Nasution No. 147 RT 18 Banjarmasin 70231' ,
				'networks8', 
				-3.315043,114.594801, 
				'mapClick8'
			]
			,			[
				'Medan Office', 
				'Kawasan Industri Medan 2, Jl. Pulau Menjangan No. 8,  Deli Serdang 20242' ,
				'networks9', 
				3.665557,98.6645933, 
				'mapClick9'
			]
			,			[
				'Jambi Office', 
				'Jl Raya Jambi – Palembang Pal 12 RT 05 Kel. Pondok Meja, Kec. Mestong, Kab Muaro,  Jambi 36137' ,
				'networks10', 
				-1.704111, 103.585165, 
				'mapClick10'
			]
			,			[
				'Cakung Office', 
				'Jl Raya Cakung Cilincing Km 1,5  Jakarta 13910' ,
				'networks11', 
				-6.172199, 106.941229, 
				'mapClick11'
			]
					]" ;

		$location2 = DB::table('LOCATION')->get() ;

		$thelocation2 = "[" ;
		$i = 0;

		foreach ($location2 as $row) {

			$i++ ;
			$LOCATION_STRING = "'".$row->LOCATION_NAME."'" ;
			$ADDRESS_STRING = "'".$row->CITY.$row->PROVINCE."'" ;
			$NETWORK_STRING = "'"."networks".$i."'" ;
			$LATITUDE = $row->LATITUDE ;
			$LONGITUDE = $row->LONGITUDE ;
			$MAPCLICK_STRING = "'"."mapclick".$i."'" ; 


			$thelocation2 .=  "[".$LOCATION_STRING.",".$ADDRESS_STRING.",".$NETWORK_STRING.",".$LATITUDE.",".$LONGITUDE.",".$MAPCLICK_STRING."]," ;

		}
		$thelocation2 .= "]" ;

		return view('network', ['soal' => $soal, 'thelocation' => $thelocation2, 'total_point' => $i] ) ;
	}
}
