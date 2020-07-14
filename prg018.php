<html>
  <head> <title>Combobox Control</title> </head>
  <body bgcolor="#FFFFFF">
        <form method=get>
              Select HTML Font Size :=
              <select name=cmbsize>
              <option <?= (isset($_GET["cmbsize"]) && $_GET["cmbsize"]==1) ? " selected" : "" ?>>1</option>
              <option <?= (isset($_GET["cmbsize"]) && $_GET["cmbsize"]==2) ? " selected" : "" ?>>2</option>
              <option <?= (isset($_GET["cmbsize"]) && $_GET["cmbsize"]==3) ? " selected" : "" ?>>3</option>
              <option <?= (isset($_GET["cmbsize"]) && $_GET["cmbsize"]==4) ? " selected" : "" ?>>4</option>
              <option <?= (isset($_GET["cmbsize"]) && $_GET["cmbsize"]==5) ? " selected" : "" ?>>5</option>
              <option <?= (isset($_GET["cmbsize"]) && $_GET["cmbsize"]==6) ? " selected" : "" ?>>6</option>
              <option <?= (isset($_GET["cmbsize"]) && $_GET["cmbsize"]==7) ? " selected" : "" ?>>7</option>
              </select>
              <input type=submit name=s1 vlaue="Submit">
              <br>
              <font size=<?= (isset($_GET["cmbsize"])) ? $_GET["cmbsize"] : "" ?>>Welcome to RPBC</font>
        </form>
  </body>
</html>