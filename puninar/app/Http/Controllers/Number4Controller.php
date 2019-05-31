<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

// Praktis HEHEHE , tinggal ganti ini doang, sisanya Copy Paste :-)
use App\Powerunit ;

// https://tutsforweb.com/creating-helpers-laravel/

class Number4Controller extends Controller
{
    //

  	public function __construct(){

  		// Praktis HEHEHE , tinggal ganti ini doang, sisanya Copy Paste :-)
  	    $this->table = 'POWER_UNIT'  ;
    	$this->view = 'number4' ;
   		$this->post = new Powerunit ;
  	}


   	public function index(){


   		$table =  $this->table ;
   		$target_table = $this->view ;
		$soal = 'Table '.$table ;
		// $list_item = Corporations::all() ;


		$list_item  = DB::table('POWER_UNIT')
            ->join('POWER_UNIT_TYPE', 'POWER_UNIT.ID_POWER_UNIT_TYPE', '=', 'POWER_UNIT_TYPE.ID_POWER_UNIT_TYPE')
            ->join('CORPORATION', 'POWER_UNIT.ID_CORPORATION', '=', 'CORPORATION.ID_CORPORATION')
             ->join('LOCATION', 'POWER_UNIT.ID_LOCATION', '=', 'LOCATION.ID_LOCATION')
            ->select('POWER_UNIT.POWER_UNIT_NUM', 'POWER_UNIT_TYPE.DESCRIPTION', 'CORPORATION.CORPORATION_NAME' , 'LOCATION.LOCATION_NAME',  'POWER_UNIT_TYPE.POWER_UNIT_TYPE_XID' )
            ->get();


       


		$total_row = count($list_item) ;
		


 			$item = '' ;
 	
		  return view($this->view, ['soal' => $soal, 'item_list' => $list_item, 'total_row' => $total_row, 'item' => '', 'target_table' => '/number4',
		   ] );
	}




	function firstkey(){
			$post =  $this->post ;
 		$columns = $post->getTableColumns();
 		return $columns ;
	}


}
