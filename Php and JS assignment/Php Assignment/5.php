<!--
Author : Shukla yash
write a php program to upload image file 
-->
<?php
 if(isset($_POST['submit'])){
 $target_dir = "uploads/";
 $target_file = $target_dir.basename($_FILES["file"]["name"]);
 $uploadok = 1;
 $imgfiletype = pathinfo($target_file, PATHINFO_EXTENSION);
 if(file_exists($target_file)){
 echo "already exists"."<br>";
 $uploadok = 0;
 }
 if($_FILES['file']['size']>200000){
 echo "large file"."<br>";
 $uploadok = 0;
 }
 $check = getimagesize($_FILES["file"]["tmp_name"]);
 if($check == false){
 echo 'not image type'."<br>";
 $uploadok = 0;
 }
 if($uploadok == 0){
 echo 'error';
 }
 else{
 if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file)){
 echo 'the file '. basename($_FILES['file']['name'])." has been uploaded";
 }
 else{
 echo 'sorry...';
 }
 }
 }
?>
<html>
 <body>
 <form enctype="multipart/form-data" method="post">
 <input type="file" name="file"/>
 <input type="submit" name="submit" value="submit"/>
 </form>
 </body>
</html>