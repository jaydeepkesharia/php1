<?
   echo "<br>Current Date & Time : ".date("d-M-Y H:i:s");
   echo "<br>Time Stemp : ".time();

   sleep(2);

   echo "<br>Current Date & Time : ".date("d-M-Y H:i:s");
   echo "<br>Time Stemp : ".time();

   $tm=mktime(0,0,0,8,15,2008);
   echo "<br>Current Date & Time : ".date("d-M-Y H:i:s",$tm);
   echo "<br>Time Stemp of 15-Aug-2008 : ".$tm;
?>