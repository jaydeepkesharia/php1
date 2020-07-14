<?
   include_once "connect.php";
   include_once "heading.php";
   echo "<b>Insert Record";

   $qins="insert into userlist(user_nm,user_pwd) values ('yuv','raj')";

   if(!mysql_query($qins))
   {
       echo "<font color=red><br>Incorrect Query : </font>";
       die("<br>".$qins);
   }
   else
   {
       echo "<br>Successfuly Add Record";
   }
   include_once "footer.php";
?>