<!--
Author: Shukla yash
Demonstrate use of global variables
-->
<?php
print_r($_POST);
?>
<form method="post">
<label for="fname">Firstname:</label>
<input type="text" name="fname"/>
<label for="lname">Lastname:</label>
<input type="text" name="lname"/>
<input type="submit" name="submit" value="Submit"/>
</form>