@extends('layout.template') 


@section('content')

<style type="text/css">
	label{
		margin-top: 20px;
	}

</style>


<div class="container">
<h1>Online Test by Rian Hariadi</h1>

    <div class="row"    style="min-height: 700px;">
        
    <p>{{ $soal }}</p>


    <div class="col-md-8" >
	   <form action="" method="post" autocomplete="off">

	   @csrf
	   <div class="form-group">
		   	  <label>
		  		POWER UNIT NUMBER
		  	</label>
		  	<input type="text" name="POWER_UNIT_NUM" value="" class="form-control">	

		  	<label>DESCRIPTION</label>
		  	<textarea rows="2" class="form-control" name="DESCRIPTION" style="text-align: left;">

		  	</textarea>

		  	<label>CORPORATION - COORPORATION NAME</label>
		  	<select class="form-control">
		  		<option value="">
		  			Chose Corporation Name
		  		</option>
		  	</select>

		  	<label>LOCATION - LOCATION NAME</label>
		  	<select class="form-control">
		  		<option value="">
		  			Chose Location
		  		</option>
		  	</select>


		  	<label>POWER UNIT TYPE</label>
		  	<select class="form-control">
		  		<option value="">
		  			Chose Location
		  		</option>
		  	</select>
		<label>IS ACTIVE</label>
		  	<div  class="col-md-12" style="margin-bottom: 20px;" >
		  	
		 
		  	
		  		<div class="col-md-1 col-xs-1">
		  			<input type="checkbox" name="" class="form-inline" style="float:left;">
		  		</div>
		  		<div class="col-md-1 col-xs-1">
		  			 	<span > Yes</span>
		  		</div>
		  		 
		  	 	</div>
		  
		  	<input type="hidden" name="insert_user">

		  	<input type="hidden" name="update_user">

		  	<input type="hidden" name="insert_date">

		   <input type="hidden" name="update_date">

		   <br>
		   <input type="submit" name="save" class="btn btn-success " style="width: 150px;" value="save" >


		  	</div>
		  	</form>

	   </div>
	

    </div>
  

</div>





@endsection('content')