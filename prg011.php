<html>
  <head><title>Data pass in same page</title></head>
  <body>
      <form action=prg011.php method=get>
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
                           <input type=submit name=s1 value="Add">
                           <input type=submit name=s2 value="Sub">
                           <input type=submit name=s3 value="Mul">
                           <input type=submit name=s4 value="Div">
                       </td>
                   </tr>
            </table>
      </form>

      <?
          if(isset($_GET["s1"]))
          {
              echo "<br>Number 1 := ".$_GET["txtnum1"];
              echo "<br>Number 2 := ".$_GET["txtnum2"];
              echo "<br>Answer := ".($_GET["txtnum1"]+$_GET["txtnum2"]);
          }
          if(isset($_GET["s2"]))
          {
              echo "<br>Number 1 := ".$_GET["txtnum1"];
              echo "<br>Number 2 := ".$_GET["txtnum2"];
              echo "<br>Answer := ".($_GET["txtnum1"]-$_GET["txtnum2"]);
          }
          if(isset($_GET["s3"]))
          {
              echo "<br>Number 1 := ".$_GET["txtnum1"];
              echo "<br>Number 2 := ".$_GET["txtnum2"];
              echo "<br>Answer := ".($_GET["txtnum1"]*$_GET["txtnum2"]);
          }
          if(isset($_GET["s4"]))
          {
              if ($_GET["txtnum2"]==0)
              {
                  echo "You can't perform devision operation. Devider is zero";
              }
              else
              {
                  echo "<br>Number 1 := ".$_GET["txtnum1"];
                  echo "<br>Number 2 := ".$_GET["txtnum2"];
                  echo "<br>Answer := ".($_GET["txtnum1"]/$_GET["txtnum2"]);
              }
          }
      ?>
  </body>
</html>