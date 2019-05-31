<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

// Praktis HEHEHE , tinggal ganti ini doang, sisanya Copy Paste :-)
use App\Types ;



class TypeController extends Controller
{
    //

  	public function __construct(){

  		// Praktis HEHEHE , tinggal ganti ini doang, sisanya Copy Paste :-)
  	    $this->table = 'POWER_UNIT_TYPE'  ;
    	$this->view = 'type' ;
   		$this->post = new Types ;
  	}


   	public function index(){


   		$table =  $this->table ;
   		$target_table = $this->view ;
		$soal = 'Table '.$table ;
		// $list_item = Corporations::all() ;
		$list_item =  DB::table($this->table)->get();


		$total_row = count($list_item) ;
	

		// $custom_query = "SELECT coloumns.coloumn_name FROM information_schema.coloumns WHERE table_name   = 'CORPORATION' ";
		// $headers = \DB::select($custom_query) ;
		
		// $data = collect($headers);

		$columns = $this->firstkey() ;
 		foreach ($columns as $columns) {

 			if(preg_match('/[A-Z]/', $columns)){
 			// There is one upper
 				$col[] = $columns ;
				}
 			else
 				unset($columns) ;
 		}

 		if ( isset($_GET['id']) )
 		{
 			$id = $_GET['id'] ;
 			$item = $item = DB::table($this->table)->where($this->firstkey()[0],$id)->first() ;
 			unset($_GET['id']) ;
 		}
 		else
 			$item = '' ;
 	
		  return view($this->view, ['soal' => $soal, 'item_list' => $list_item, 'total_row' => $total_row, 'th' => $col,'item' =>$item, 'target_table' => $target_table ] );
	}






	function store($id=NULL){
		$post =  $this->post ;

		$array_post = $_POST ;

		$keys = array_keys($array_post) ;
	

		foreach ($keys as $row) {
			if ($row == '_token')
				$key_input = 'token' ;
			else if ($row == 'submit')
				$key_input = NULL ;
			else
				$key_input = $row ;

			if($key_input != NULL)
				$post->$key_input = request($row) ;
		}
		$post->save() ;


		return back() ;
	}


	function edit($id)
    {

    	$array_post = $_POST ;

		$keys = array_keys($array_post) ;
	
		$dataform = array() ;
		foreach ($keys as $row) {
			if ($row == '_token')
				$key_input = 'token' ;
			else if ($row == 'submit')
				$key_input = NULL ;
			else
				$key_input = $row ;

			if($key_input != NULL)
				$dataform[$key_input] = request($row) ;
		}

    	DB::table($this->table)
            ->where($this->firstkey()[0], $id)
            ->update($dataform);

    	return redirect($this->view);
	}


	function delete($id)
	{
		

		DB::table($this->table)->where($this->firstkey()[0],$id)->delete();

		return redirect($this->view);
	}


	function truncate(){
		DB::table($this->table)->truncate();
		
		return back() ;
	}


	function firstkey(){
			$post =  $this->post ;
 		$columns = $post->getTableColumns();
 		return $columns ;
	}


}
