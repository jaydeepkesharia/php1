<?
   include_once "connect.php";
   include_once "heading.php";

   if(isset($_POST["s1"]))
   {
       $qupd="update userlist set user_pwd='".$_POST["txtpassword"]."'";
       $qupd=$qupd." where user_nm='".$_POST["txtuser"]."'";

       //echo $qupd;
       mysql_query($qupd);
       echo "<b><font color=red>Password has been changed</font></b>";
       include_once("footer.php");
       die();
   }
?>

<form action=prg058.php method=post>
 <table border=0>
        <tr>
            <th align=left>User Name</th>
            <th align=left><?=$_GET["uid"]?>
            <input type=hidden name=txtuser value=<?=$_GET["uid"]?>>
            </th>
        </tr>
        <tr>
            <th align=left>New Password</th>
            <td><input type=password name=txtpassword></td>
        </tr>
        <tr>
            <th colspan=2><input type=submit value="Change Password" name=s1></th>
        </tr>
 </table>
</form>

<?
   include_once "footer.php";
?>