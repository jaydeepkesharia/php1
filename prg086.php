<?

   $flnm="Check.txt";
   if(!file_exists($flnm))
   {
       die("File does not exist");
   }
   $fp=fopen($flnm,"r");

   while($v=fgets($fp,1024))
   {
       echo "<br>".$v;
   }
   echo "<br>Current File pointer : ".ftell($fp);
   fseek($fp,0);
   echo "<br>Current File Pointer : ".ftell($fp);
   echo "<br>";

   while($v=fgetc($fp))
   {
       if($v="\n")
       {
           echo "<br>";
       }
       else
       {
           echo $v;
       }
   }
?>