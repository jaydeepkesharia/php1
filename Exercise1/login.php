<form action=logincheck.php method=post>
      <?
          if(isset($_GET["msg"]))
          {
      ?>
              <caption><font color=red>Incorrect User Name or Password</font></caption>
      <?
          }
      ?>
      <table border=1>
             <tr>
                 <td>User Name : </td>
                 <td><input type=text name=txtuser></td>
             </tr>
      </table>
</form>