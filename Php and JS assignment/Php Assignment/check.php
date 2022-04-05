<?php
$my_year = $_POST['eyear'];
year_check($my_year);
function year_check($my_year){
      if ($my_year % 4 == 0)
         echo "It is a leap year  " .  $my_year . "<br/>";
      else
         echo "It is not a leap year  ". $my_year . "<br/>";
   }
   ?>