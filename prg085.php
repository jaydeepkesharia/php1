<?
   //READ FILE AND SIZE IN BYTES
   $flnm="Check.txt";
   if(!file_exists($flnm))
   {
       die("File does not exist");
   }
   $fp=fopen($flnm,"r");

   $fsize=filesize($flnm);
   echo "<br>File size = ".$fsize." bytes";
   echo "<br>File context : ".fread($fp,$fsize);
   //echo "<br>File context : <br> ".nl2br(fread($fp,$size));
?>