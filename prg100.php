<?
   $str="Hello 'RPBC' Rajkot";
   echo "<br>".$str;

   $s=AddSlashes($str);
   echo "<br><br>AddSlashes($str) := ".AddSlashes($str);
   
   echo "<br><br>StripSlashes($str) := ".StripSlashes($str);

   echo ("<br>Welcome");
   echo "<br>Welcome"," Rajkot";

   $ret=print("<br>Welcome to Rajkot");
   echo "<br>Return value := ".$ret;
?>