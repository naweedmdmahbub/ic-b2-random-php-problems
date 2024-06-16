<?php
  // $arr = [10, 12, 15, 189, 22, 2, 34];
  $arr = [10, -12, 34, 12, -3, 123];

  $negative = false;
  $mini = $arr[0];
  for($i=1; $i<count($arr); $i++){
    if($arr[$i] <0){
      $arr[$i] *= -1;
    }
    if($arr[$i] < $mini){
      $mini = $arr[$i];
    }
  }
  echo $mini;
?>