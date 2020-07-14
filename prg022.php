<html>
  <head> <title>Use of strtolower & strtoupper Functions</title> </head>
  <body bgcolor="#FFFFFF">
        <form method=post>
              DESCRIPTION : <br>
              <textarea rows=5 cols=50 name=txtdescription><?= @$_POST["txtdescription"] ?></textarea>
              <br>
              <input type=submit name=s1 value="Submit">
        </form>
        <?
            if(isset($_POST["s1"]))
            {
                echo "LOWER CASE <br>";
                echo strtolower($_POST["txtdescription"]);

                echo "<br><br>UPPER CASE <br>";
                echo strtoupper($_POST["txtdescription"]);
            }
        ?>
  </body>
</html>