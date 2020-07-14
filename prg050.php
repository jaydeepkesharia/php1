<?
   include "heading.php";
   include "connect.php";
   $qsel="select * from userlist";
   $rs=mysql_query($qsel);

   $arr1=mysql_fetch_array($rs);
   echo "<pre>";
   print_r($arr1);
   echo "</pre>";

   $arr2=mysql_fetch_assoc($rs);
   echo "<pre>";
   print_r($arr2);
   echo "</pre>";

   $obj=mysql_fetch_object($rs);
   echo "<pre>";
   print_r($obj);
   echo "</pre>";

   if($arr=mysql_fetch_assoc($rs))
   {
       echo "<pre>";
       print_r($arr);
       echo "</pre>";
   }
   else
   {
       echo "No more Records";
   }
   include "footer.php";
?>