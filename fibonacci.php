<?php

function fibonacciDisplay($max){
    
    // if and else if to generate first two numbers
    if ($max < 2)
    {
        return $max;
    }
  
   else
       
     return (fibonacciDisplay($max-1) + fibonacciDisplay($max-2));
}

if(isset($_POST['fibonacci'] )){
   
    set_time_limit (500) ;
    
    try {
        $max =$_POST['maxNumber'];
        $fibonacciStr = '';
        for ($i = 0; $i < $max; $i++){
            $fibonacciStr .= fibonacciDisplay($i). ' ';
        }
        die(json_encode(array('results'=>$fibonacciStr)));
    }
   catch(Exception $e) {
        echo 'Message: ' .$e->getMessage();
    }
    
}
else
{
    $max = 10;
     $fibonacciStr = '';
     for ($i = 0; $i < $max; $i++){
     $fibonacciStr .= fibonacciDisplay($i). ' ';
     }
     
     echo $fibonacciStr;
}

?>
