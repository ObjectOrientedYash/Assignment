<!--
Author : Shukla yash
Demonstrate the use of array and string function
-->
<?php
echo "string functions are used as follows";
$str="WELCOME TO the world of web programming";  
$str=strtolower($str);  
echo "lowercase string  :" .$str."<br/>";
$str=strtoupper($str);  
echo "uppercase string  :" .$str."<br/>";
$str=strrev($str);  
echo "reverse order  string :" .$str."<br/>";
$str=strlen($str);  
echo "length of string :" .$str;
$s = "\n \n \n  welcome to the world of coding \n";
echo trim($s) . "<br>";
echo ltrim($s) . "<br/>";
echo rtrim($s) . "<br/>";
echo strpos($s,"coding");
echo "<br/>";
echo str_repeat("the","30");
echo "<br/>";
echo "-------------------------------------------------------------------------------------" . "<br/>"; 
echo "Array functions:  ";
echo "<br/>"; 
$season=array("summer","winter","spring","autumn");    
echo "Season are: $season[0], $season[1], $season[2] and $season[3]";    
echo count($season) . "<br/>";
sort($season);
echo "sorted order :";
echo "<br/>";
foreach($season as $s)
{
    echo $s ."<br/>";
}
$reversedemo=array_reverse($season);
echo "array in reverse order  :";
echo "<br/>";    
foreach( $reversedemo as $s )    
{    
  echo "$s<br />";    
}  
$key=array_search("spring",$season);  
echo $key; 
echo "<br/>";
if (in_array("spring", $season, TRUE))  
    {  
        echo "found \n";  
    }  
    else
    {
        echo "not found" . "<br/>";
    }
?>