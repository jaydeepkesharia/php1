<?
   include "heading.php";
   include "connect.php";
   $qsel="select * from userlist";
   $rs=mysql_query($qsel);

   $rec=mysql_fetch_array($rs);
   echo "<br>User Name := ".$rec["user_nm"];
   echo "<br>Password := ".$rec["user_pwd"];

   $obj=mysql_fetch_object($rs);
   echo "<br>User Name := ".$obj->user_nm;
   echo "<br>Password := ".$obj->user_pwd;

   include_once "footer.php";
?>