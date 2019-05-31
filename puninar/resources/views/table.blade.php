@extends('layout.template') 


@section('content')



<div class="container">
<h1>Online Test by Rian Hariadi</h1>

    <div class="row"    style="min-height: 700px;">
        
    <p>{{ $soal }}</p>

<style type="text/css">
	label{
		margin-top: 20px;
	}

</style>

    <div class="col-md-8" >
	   <form method="post" accept="" autocomplete="off">
	   <div class="form-group">
		   	  <label>
		  		POWER UNIT NUMBER
		  	</label>
		  	<input type="text" name="" value="" class="form-control">	

		  	<label>ID CORPORATION</label>
		  	<select class="form-control">
		  		<option value="">
		  			Chose Corporation Name
		  		</option>
		  	</select>

		  	</form>

	   </div>
	

    </div>
  






    </div>


</div>





@endsection('content')