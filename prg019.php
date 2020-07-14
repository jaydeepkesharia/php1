<html>
  <head> <title>Date Function</title> </head>
  <body bgcolor="#FFFFFF">
        <?
            echo "<br><b>Date Function</b><br>";
            echo "<br>Date 1:= ".date("d-M-Y");
            echo "<br>Date 2:= ".date("j-F-Y");

            echo "<br>Date 3:= ".date("l,d==n==y");

            echo "<br><b>Time := ".date("H:i:s");
            echo "<br>Current Date and Time := ".date("d-M-Y H:i:s");
        ?>
  </body>
</html>