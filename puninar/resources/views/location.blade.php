<?php

if ($total_row != 0)
{
  if ($item != '')
  {
    $array = json_decode(json_encode($item), true);
    $firstKey = array_key_first($array);
   
  }
  else{
      $array = json_decode(json_encode($item_list[0]), true);
    $firstKey = array_key_first($array);
  }

}


?>




@extends('layout.tableview') 



@section('content')

<div class="container" >
    <div class="row"    style="min-height: 300px;">

    <h3 style="margin-top: 70px;">

    <?php echo ( $item == '' ? 'Insert New Data' : 'Edit -  ' .$item->$firstKey )  ?></h3>
    <hr>
    <div class="col-md-8" >
   

	    <form action="<?php echo ( $item == '' ? '' : '/'.$target_table.'/'.'edit'.'/'.$item->$firstKey )  ?>" method="post" autocomplete="off">

     @csrf
     <div class="form-group">
  <!--        <label>
          ID_CORPORATION
        </label> -->
        <?php 
            if ($item != ''){
        ?>
        <input type="hidden" name="<?php echo $firstKey ?>" value=" <?php echo $item->$firstKey   ?>" class="form-control"> 
        <?php
            }
          ?>

        <?php   $field = 'LOCATION_NAME' ; 
              $thevalue =  ($item == '' ? '' : $item->$field) ; ?>
        <label><?php echo $field ?></label>
        <textarea rows="2" class="form-control" name="<?php echo $field ?>" style="text-align: left;" wrap="virtual" ><?php echo $thevalue   ?>
        </textarea>

        <?php   $field = 'CITY' ; 
              $thevalue =  ($item == '' ? '' : $item->$field) ; ?>
        <label><?php echo $field ?></label>
        <input type="text" name="<?php echo $field ?>" value="<?php echo $thevalue   ?>">

         <?php   $field = 'PROVINCE' ; 
              $thevalue =  ($item == '' ? '' : $item->$field) ; ?>
        <label><?php echo $field ?></label>
        <input type="text" name="<?php echo $field ?>" value="<?php echo $thevalue   ?>">


         <?php   $field = 'LATITUDE' ; 
              $thevalue =  ($item == '' ? '' : $item->$field) ; ?>
        <label><?php echo $field ?></label>
        <input type="text" name="<?php echo $field ?>" value="<?php echo $thevalue   ?>">

         <?php   $field = 'LONGITUDE' ; 
              $thevalue =  ($item == '' ? '' : $item->$field) ; ?>
        <label><?php echo $field ?></label>
        <input type="text" name="<?php echo $field ?>" value="<?php echo $thevalue   ?>">

        <?php   $field = 'INSERT_USER' ; 
              $thevalue =  ($item == '' ? 1 : $item->$field) ; ?>
        <input type="hidden" name="<?php echo $field ?>" value="<?php echo $thevalue   ?>">

         <?php   $field = 'UPDATE_USER' ; 
              $thevalue =  ($item == '' ? 2 : $item->$field) ; ?>
        <input type="hidden" name="<?php echo $field ?>" value="<?php echo $thevalue   ?>">

        <?php   $field = 'INSERT_DATE' ;
             $thevalue =  ($item == '' ? date('Y-m-d') : $item->$field) ; ?>
        <input type="hidden" name="<?php echo $field ?>" value="<?php echo $thevalue   ?>">

         <?php   $field = 'UPDATE_DATE' ; 
              $thevalue =   date('Y-m-d') ?>
        <input type="hidden" name="<?php echo $field ?>" value="<?php echo $thevalue   ?>">
     

       <br><br>
       <?php
            if ($item == ''){
          ?>    
       <input type="submit" name="submit" class="btn btn-success " style="width: 150px;" value="submit" >
       <?php
        } 
        else
        { ?>
         <input type="submit" name="submit" class="btn btn-info " style="width: 150px;" value="Edit" >

          <?php

        }
        ?>

        </div>
        </form>

	   </div>
	

  
    </div>

</div>





@endsection('content')