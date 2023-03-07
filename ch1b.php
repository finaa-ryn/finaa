<?php 
   $nilai=84;

   if( $nilai >=90){
    $grade ="sangat baik";
   }
   else if( $nilai >=80){
    $grade ="baik";
   }
   else if( $nilai >=70){
    $grade ="cukup";
   }
   else if( $nilai >=50){
    $grade ="kurang";
   }
   else{
    $grade ="sangat kurang";
   }

   echo ("Nilai anda ".$nilai.", Grade ".$grade);
?>