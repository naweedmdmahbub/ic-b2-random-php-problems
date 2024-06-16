<?php
    $number = readline("Enter a number: ");
    // $number = 5;
    for($j=1; $j<=$number; $j++){
      for($i=0; $i<$number-$j; $i++){
        echo " ";
      }
      for($i=1; $i<$j*2; $i++){
        echo '*';
      }
      echo "\n";
    }
?>