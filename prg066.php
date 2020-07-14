<?
   include("connect.php");
   $rs=mysql_query("select * from userprofile");

   if(!$rs)
   {
       echo "<br>Error No := ".mysql_errno();
       echo "<br>Error := ".mysql_error();
   }
   else
   {
       echo "<br>Executed Query";
   }
?>