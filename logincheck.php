<?
   include("connect.php");

   $qsel="select * from userprofile where userid='".$_POST["txtuserid"]."' and userpwd='".$_POST["txtuserpwd"]."'";

   echo $qsel;
   $rs=mysql_query($qsel);
   if(mysql_num_rows($rs)>0)
   {
       header("Location: prg059.php");
   }
   else
   {
       header("Location: Login.php?msg=error");
   }
?>