<?php
$n = $_POST['num'];
if($n % 2 == 0)
{
    echo $n .  "  is even" . "<br/>";
}
else
{
    echo $n .   "  is odd" . "<br/>";
}
?>