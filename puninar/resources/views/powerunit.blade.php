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

                <?php   $field = 'POWER_UNIT_NUM' ; 
              $thevalue =  ($item == '' ? '' : $item->$field) ; ?>
        <label><?php echo $field ?></label>
        <input type="text" name="<?php echo $field ?>" value="<?php echo $thevalue   ?>">


        <?php   $field = 'DESCRIPTION' ; 
              $thevalue =  ($item == '' ? '' : $item->$field) ; ?>
        <label><?php echo $field ?></label>
        <textarea rows="2" class="form-control" name="<?php echo $field ?>" style="text-align: left;" wrap="virtual" ><?php echo $thevalue   ?>
        </textarea>



         <?php   $field = 'ID_CORPORATION' ; 
              $thevalue =  ($item == '' ? '' : $item->$field) ; 



              ?>
        <label><?php echo $field ?></label>
        <select name="<?php echo $field ?>" required="" >
          <option  value="" class="form-control">
            Choose <?php echo $field ?>
          </option>
          <?php
              foreach ($list_corporation as $row) {

               $selected = '' ;
               if (($item != '') && ($item->$field == $row->$field) )
                       $selected = 'selected="" ' ;

                echo '<option value="'.$row->$field.'"   '.$selected.'     >'.$row->CORPORATION_NAME.'</option>' ;
              }
          ?>
        </select>


        <?php   $field = 'ID_LOCATION' ; 
              $thevalue =  ($item == '' ? '' : $item->$field) ; ?>
        <label><?php echo $field ?></label>
        <select name="<?php echo $field ?>"  required="" >
          <option  value="" class="form-control">
            Choose <?php echo $field ?>
          </option>
          <?php
              foreach ($list_location as $row) {


               $selected = '' ;
               if (($item != '') && ($item->$field == $row->$field) )
                       $selected = 'selected="" ' ;
                echo '<option value="'.$row->$field.'"   '.$selected.'     >'.$row->LOCATION_NAME.' ('.$row->CITY.'-'.$row->PROVINCE.')</option>' ;
              }
          ?>
        </select>


         <?php   $field = 'ID_POWER_UNIT_TYPE' ; 
              $thevalue =  ($item == '' ? '' : $item->$field) ; ?>
        <label><?php echo $field ?></label>
        <select name="<?php echo $field ?>"  required="">
          <option  value="" class="form-control">
            Choose <?php echo $field ?>
          </option>
          <?php
              foreach ($list_type as $row) {

                
               $selected = '' ;
               if (($item != '') && ($item->$field == $row->$field) )
                       $selected = 'selected="" ' ;
                echo '<option value="'.$row->$field.'"   '.$selected.'    >'.$row->POWER_UNIT_TYPE_XID.'</option>' ;
              }
          ?>
        </select>












         <?php   $field = 'IS_ACTIVE' ; 
             $checked = '' ;


             if ( $item != '') {
                if ($item->$field != 1 )
                  $checked = 'checked="" ' ;
            
             }
          




           

             ?>
           
        <div style="text-align: left;" class="col-md-1 col-xs-1 col-lg-1">
         <label><?php echo $field ?></label>
             <input type="checkbox" name="<?php echo $field ?>" value="Y" <?php echo $checked  ?>
        </div>
     




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