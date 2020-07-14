<?
   include("connect.php");
   include("heading.php");
   $qsel="select * from userlist";
   $rs=mysql_query($qsel);

   while($rec=mysql_fetch_array($rs))
   {
       echo "<br>User Name := ".$rec["user_nm"];
       echo "&nbsp;&nbsp;&nbsp;&nbsp;Password := ".$rec["user_pwd"];
   }
   include("footer.php");
?>