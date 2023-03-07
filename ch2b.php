<?php 
  $star=4;
  for($i=1; $i<=$star; $i++){
    for($j=$star; $j>=$i; $j-=1){
        echo "*";
    }
    echo "<br>";
  }
?>