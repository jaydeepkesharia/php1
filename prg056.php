<?
   include_once "heading.php";
?>
<form action="prg056.php" method=get>
      Enter User Name :
      <input type=text name=txtuser value=<?= isset($_GET["txtuser"]) ? $_GET["txtuser"] : "" ?>>
      <input type=submit name=s1 value="Delete">
</form>
<?
   if(isset($_GET["s1"]))
   {
       include_once "connect.php";
       $qdel="delete from userlist where user_nm='".$_GET["txtuser"]."'";
       if(mysql_query($qdel))
       {
           echo "<br>Affected Records := ".mysql_affected_rows();
           if(mysql_affected_rows()>0)
           {
               echo "<br>User Deleted";
           }
           else
           {
               echo "<br>User Not Found";
           }
       }
       else
       {
           echo "<br>Incorrect Query";
           die("<br>".$qdel);
       }
   }
   include_once "footer.php";
?>