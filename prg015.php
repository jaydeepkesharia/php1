<html>
  <head> <title>Radio Button</title> </head>
  <body bgcolor="#FFFFFF">
        <form method=get>
              Select Color :=
              <input type=radio name=optcolor value=red
                     <?
                         echo (isset($_GET["optcolor"]) && $_GET["optcolor"]=="red") ? " checked" : "";
                     ?>>Red

              <input type=radio name=optcolor value=green
                     <?
                         echo (isset($_GET["optcolor"]) && $_GET["optcolor"]=="green") ? " checked" : "";
                     ?>>Green

              <input type=radio name=optcolor value=blue
                     <?
                         echo (isset($_GET["optcolor"]) && $_GET["optcolor"]=="blue") ? " checked" : "";
                     ?>>Blue

              <input type=submit name=s1 vlaue="Submit">
        </form>
        <font color=<? echo (isset($_GET["optcolor"])) ? $_GET["optcolor"] : "black" ?>>
              Welcome to RPBC
        </font>
  </body>
</html>