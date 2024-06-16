<?php
  $number = readline("Enter a number: ");
  $sum = 0;
  while($number){
    // $rem = $number % 10;
    $sum += $number%10;
    $number /= 10;
  }
  echo $sum;
?>