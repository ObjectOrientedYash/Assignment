<!-- 
Author :Shukla yash
Demonstrate use of regular expression and date function
-->
<?php  
    $website = "Welcome  to the world of web programming";   
    $res = preg_match('/web/i', $website, $matches);  
    if ($res) {  
        echo "Pattern matched in string.</br>";  
        print_r($matches);  
    } else {  
        echo "Pattern not matched in string.";  
    }
    echo "<br>";
    echo "-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------";
    echo "<br/>";
    echo "Date function demo :  ";
    echo "<br/>";
echo "Today's date is :";
$today = date("d/m/Y");
echo $today; 
echo "<br/>";   
echo "Today's date in various formats:" . "\n";
echo date("d/m/Y") . "<br>";
echo date("d-m-Y") . "<br>";
echo date("d.m.Y") . "<br>";
echo date("d.M.Y/D");
echo "<br/>";
$timestamp = time();
echo($timestamp);
echo "<br>";
echo(date("F d, Y h:i:s A", $timestamp));
echo "<br>";
?>  
