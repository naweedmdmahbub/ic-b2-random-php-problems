<?php
  $total = 0;
  $myfile = fopen("paragraphs.txt", "r") or die("Unable to open file!");
  $words = 0;
  
  while(!feof($myfile)) {
    $str = fgets($myfile);
    $length = strlen($str);
    $i=0;
    while($i<$length){
      $flag = 0;
      while(  $i<$length &&  ( ($str[$i]>='A' && $str[$i]<='Z')  || ($str[$i]>='a' && $str[$i]<='z') )  )
      {
        $flag = 1;
        $i++;
      }
      if($flag == 1){
        $words++;
      }
      $i++;
    }
  }
  fclose($myfile);
  echo $words;
?>