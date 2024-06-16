<?php
  $str = readline("Enter a sentence: ");
  $i = 0;
  while($i<strlen($str) ){
    $word = "";
    while(  $i<strlen($str) &&  ( ($str[$i]>='A' && $str[$i]<='Z')  || ($str[$i]>='a' && $str[$i]<='z') )  )
    {
      $word .= $str[$i];
      $i++;
    }
    
    for($j=strlen($word)-1; $j>=0; $j--) echo $word[$j];
    
    if ($i < strlen($str)) {
      echo $str[$i];
    }
    // echo $str[$i];
    $i++;
  }
?>