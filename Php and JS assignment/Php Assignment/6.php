<!--
Author : Shukla yash
a). write a prorgram to check current year is leap year or not
-->
<?php
   function year_check($my_year){
      if ($my_year % 4 == 0)
         echo "It is a leap year  " .  $my_year . "<br/>";
      else
         echo "It is not a leap year  ". $my_year . "<br/>";
   }
   $my_year = 2022;
   year_check($my_year);
?>