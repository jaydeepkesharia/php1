<?
   //WRITE FILE
   $fp=fopen("Check.txt","w");
   $str="Welcome to RPBC";
   echo "<br>Bytes : ".fwrite($fp,$str);
   echo "<br>Write content in text file";
?>