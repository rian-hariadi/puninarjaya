<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Number7Controller extends Controller
{
    //

	function index()
	{
		$soal = 'Tuliskan kode PHP dengan output deret angka seperti di bawah ini :' ;

		// 7a

		$rows = 5 ;
		$result = '' ;

   	 for($i  = $rows ; $i >= 1; --$i)
    {
        for($j = 1; $j <= $i; ++$j)
        {
            $result .=  $j." ";
        }
        $result .=  '<br>' ;
    }

    	$result7a = $result ;


    	// 7b
    		$rows = 5 ;
		$result = '' ;

   	 for($i  = $rows ; $i >= 1; --$i)
    {
        for($j = $i ; $j >= 1; --$j)
        {
            $result .=  $j." ";
        }
        $result .=  '<br>' ;
    }

    	$result7b = $result ;


    	// 7b
    		$rows = 5 ;
		$result = '' ;

   	 for($i  = $rows ; $i >= 1; --$i)
    {
        for($j = $i ; $j >= 1; --$j)
        {
            $result .=  $j." ";
        }
        $result .=  '<br>' ;
    }

    	$result7b = $result ;


    	// 7c
    	$rows = 9 ; 	$result = '' ;  $c = 5;
    	 for($i  = 1 ; $i <= 9; ++$i)
    	 {
    	 	if ($i <= $c)
    	 	{
    	 		for($j = $i ; $j <= $c ; $j++ ){
    	 			$result .= $j. ' ' ;
    	 		}
    	 		
    	 		
        		for($f = $c-1 ; $f >= $i ; --$f)
       		 	{
            		$result .=  $f." ";
        	 	}

    	 	}
    	 	else
    	 	{
    	 		$st = ($rows+1 - $i) ;
    	 		for ($f = $st ; $f <= $c  ; $f++)
    	 		{
    	 			$result .=  $f." ";
    	 		}

    	 		for ($j = $c-1 ; $j >= $st  ; $j--)
    	 		{
    	 			$result .=  $j." ";
    	 		}
    	 		

    	 	}




    	 	 $result .=  '<br>' ;
    	 }


    	 $result7c =  '<div style="text-align:center">' .$result .'</div>' ;





    	 // 7d 
    	 

    	
    	  $result7d =  '<div style="text-align:center">' .$this->number7d(1,'') .'</div>' ;







    	 //test
    	 $test = '' ;

    	 $i = 1;
    	 for ($j = 1 ; $j <= $i ; $j++)
    	 {
				$test .= $j .' ';
			}


    	return view('number7', ['soal' => $soal, 'test' => $test, 'result7a' => $result7a, 'result7b' => $result7b, 'result7c' => $result7c, 'result7d' => $result7d
		   ] );	
	}


	function number7d($i,$result)
	{
		
		for ($i ; $i <= 5 ; $i++)
		{
			for ($j = 1; $j <= $i ; $j++){
				$result .= $j ;
			}

			for ($k = $i-1 ; $k >= 1 ; $k--){
				$result .= $k ;
			}
			
			$result .= '<br>';
		}
		for ($i = 5-1 ; $i >= 1 ; $i--)
		{
			for ($j = 1; $j <= $i ; $j++){
				$result .= $j ;
			}

			for ($k = $i-1 ; $k >= 1 ; $k--){
				$result .= $k ;
			}
			
			$result .= '<br>';
		}

		return $result ;

	}



	function gabung($result,$j)
	{	
		return $result.$j.' ';

	}




















}
