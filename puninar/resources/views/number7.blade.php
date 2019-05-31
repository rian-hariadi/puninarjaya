@extends('layout.template') 


@section('content')



<div class="container">
<h1>Online Test by Rian Hariadi</h1>

    <div class="row"    style="min-height: 700px;">

    <h3>Number 7</h3>
    <p>Soal: {{ $soal }}</p>
        
    <h4>7a</h4>
    <?php

    	echo $result7a ;


    ?>
    <hr>

     <h4>7b</h4>
    <?php

    	echo $result7b ;


    ?>


     <hr>

     <h4>7c</h4>
    <?php

    	echo $result7c ;


    ?>


     <hr>

     <h4>7d</h4>
    <?php

    	echo $result7d ;


    ?>




     <hr>

     <h4>Test</h4>
    <?php

    	echo $test ;


    ?>







    </div>


</div>





@endsection('content')