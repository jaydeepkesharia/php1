<?php
/*   echo "<pre>";
   print_r($_POST);
   print_r($_FILES);
   echo "</pre>";
*/
$name = $_REQUEST["txtname"];
$per = $_REQUEST["txtper"];

   $dest="images/".time().$_FILES["userfile"]["name"];
   
   if(move_uploaded_file($_FILES["userfile"]["tmp_name"],$dest))
   {
	mysql_query("insert into student values (null,'$name',$per,'$dest')");
   }
   else
   {
       echo "<br>File Upload problem";
   }
?>