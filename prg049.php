<?
   include "heading.php";
   include "connect.php";
   $qsel="select * from userlist";
   $rs=mysql_query($qsel);

   if(!$rs)
   {
       echo "<font color=red>Incorrect Query";
       die("<br>".$qsel);
   }
   else
   {
       echo "Correct Query";
       echo "<br>Total Records := ".mysql_num_rows($rs);
       echo "<br>Total Fields := ".mysql_num_fields($rs);
   }
   include "footer.php";
?>