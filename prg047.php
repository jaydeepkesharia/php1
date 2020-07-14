<?
   include_once "heading.php";
?>
<!--<form action="prg048.php" method=post>  -->
<form action="prg055.php" method=post>
      <table border=0>
             <caption><font color=red seze=4>Add New User</font></caption>
             <tr>
                 <td>User Name : </td>
                 <td><input type=text name=txtuser> </td>
             </tr>
             <tr>
                 <td>Password : </td>
                 <td><input type=password name=txtpassword> </td>
             </tr>
             <tr>
                 <td align=right><input type=submit name=s1 value="Add"> </td>
                 <td><input type=reset name=r1 value="Cancel"> </td>
             </tr>
      </table>
</form>
<?
   include_once("footer.php");
?>