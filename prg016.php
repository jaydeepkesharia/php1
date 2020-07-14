<html>
  <head> <title>Radio Button</title> </head>
  <body bgcolor="#FFFFFF">
        <form method=get>
              Select Font :=
              <input type=radio name=optfont value="Arial"
                     <?
                         echo (isset($_GET["optfont"]) && $_GET["optfont"]=="Arial") ? " checked" : "";
                     ?>>Arial

              <input type=radio name=optfont value="Impact"
                     <?
                         echo (isset($_GET["optfont"]) && $_GET["optfont"]=="Impact") ? " checked" : "";
                     ?>>Impact

              <input type=radio name=optfont value="Century Gothic"
                     <?
                         echo (isset($_GET["optfont"]) && $_GET["optfont"]=="Century Gothic") ? " checked" : "";
                     ?>>Century Gothic

              <input type=submit name=s1 vlaue="Submit">
        </form>
        <font face=<? echo (isset($_GET["optfont"])) ? $_GET["optfont"] : "Times New Roman" ?>>
              Welcome to RPBC
        </font>
  </body>
</html>