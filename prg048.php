<?
   include_once "heading.php";
   include_once "connect.php";

   $usr=$_POST["txtuser"];
   $pwd=$_POST["txtpassword"];
   $qins="insert into userlist (user_nm,user_pwd) values ('$usr','$pwd')";

   //$qins="insert into userlist(user_nm,user_pwd) values ('".$_POST["txtuser"]."','".$_POST["txtpwd"]."')";
   
   if(!mysql_query($qins))
   {
       echo "<font color=red><br>IncorrectQuery : </font>";
       dir("<br>".$qins);
   }
   else
   {
       echo "<br>Successfully Add Record ";
   }
   include_once "footer.php";
?>