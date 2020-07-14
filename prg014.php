<html>
  <head>
      <title>Simple Interest</title>
  </head>
  <body>
    <form method=post>
          <table border=0>
            <tr>
                <td>Enter P : </td>
                <td><input type=text name=txtp value=
                           <?
                               echo (isset($_POST["txtp"])) ? $_POST["txtp"] :"" ;
                           ?>> </td>
            </tr>
            <tr>
                <td>Enter R : </td>
                <td><input type=text name=txtr value=
                           <?
                               echo (isset($_POST["txtr"])) ? $_POST["txtr"] : "" ;
                           ?>> </td>
            </tr>
            <tr>
                <td>Enter N : </td>
                <td><input type=text name=txtn value=
                           <?
                               echo (isset($_POST["txtn"])) ? $_POST["txtn"] : "" ;
                           ?>> </td>
            </tr>
            <tr>
                <td colspan=2 align=center>
                    <input type=submit name=s1 value="Calculate">
                </td>
            </tr>
          </table>
    </form>

    <?
        if(isset($_POST["s1"]))
        {
            $si=($_POST["txtp"] * $_POST["txtr"] * $_POST["txtn"])/100;
            echo "<br>Simple Interest := <font color=red>".$si."</font>";
        }
    ?>
  </body>
</html>