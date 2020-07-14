<html>
  <head>
      <title>Keep entered value</title>
  </head>
  <body>
      <form action="prg012.php" =get>
            <table border=0>
                   <tr>
                       <td>Enter Number : </td>
                       <td><input type=text name=txtnum
                                  value=<?
                                          if(isset($_GET["txtnum"]))
                                          {
                                              echo $_GET["txtnum"];
                                          }
                                        ?>>
                                  </td>
                       <td><input type=submit name=s1 value="square"></td>
                   </tr>
            </table>
      </form>

      <?
          if(isset($_GET["s1"]))
          {
              echo "<br><br> Square := <font color=red>".
                   ($_GET["txtnum"]*$_GET["txtnum"]).
                   "</font>";
          }
      ?>
  </body>
</html>