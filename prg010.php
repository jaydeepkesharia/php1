<html>
  <head><title>Data pass in same page</title></head>
  <body>
      <form action="prg010.php" method="get">
            <table border=0>
                   <tr>
                       <td>Enter First No. : </td>
                       <td><input type=text name=txtnum1></td>
                   </tr>
                   <tr>
                       <td>Enter Second No. : </td>
                       <td><input type=text name=txtnum2></td>
                   </tr>
                   <tr>
                       <td align=center colspan=2>
                           <input type="submit" name="s1" value="Add"> </td>
                   </tr>
            </table>
      </form>

      <?php
          if(isset($_GET["txtnum1"]))
          {
              echo "<br>Number 1 := ".$_GET["txtnum1"];
              echo "<br>Number 2 := ".$_GET["txtnum2"];
              echo "<br>Answer := ".($_GET["txtnum1"]+$_GET["txtnum2"]);
          }
      ?>
  </body>
</html>