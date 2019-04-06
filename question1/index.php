
<?php 
  
function Divide($a, $b) 
{ 
    $dividend = $a; 
    $divisor = $b; 
  
    // Calculate sign of divisor  
    // i.e., sign will be negative  
    // only if either one of them  
    // is negative otherwise it 
    // will be positive 
  
    $sign = ($dividend < 0) ^  
            ($divisor < 0) ? -1 : 1; 
  
    // Remove signs of  
    // dividend and divisor 
    $dividend = abs($dividend); 
    $divisor = abs($divisor); 
  
    // Zero division Exception. 
    if ($divisor == 0)  
    { 
        echo "Cannot Divide by 0"; 
        echo""; 
    } 
  
    if ($dividend == 0)  
    { 
        echo $a , " / " , $b ,  
             " is equal to : " , 0 ; 
            echo ""; 
    } 
  
    if ($divisor == 1)  
    { 
        echo $a , " / " , $b ,  
             " is equal to : ",  
             $sign * $dividend. "\n"; 
        echo ""; 
    } 
  
 
    echo $a , " / " , $b ,  
         " is equal to : " , 
         $sign * exp(log($dividend) -  
                      log($divisor)). "\n"; 
        echo ""; 
} 
  
// Driver code 
$a = 10; 
$b = 5; 
  
Divide($a, $b); 
  
$a = 49; 
$b = -7; 
Divide($a, $b); 
  
?> 