<html>
  <head> <title>Check Box</title> </head>
  <body bgcolor="#FFFFFF">
        <form method=get>
              Select Style :=
              <input type=checkbox name=chkbold value="B"
                     <?
                         echo (isset($_GET["chkbold"])) ? " checked" : "";
                     ?>>Bold

              <input type=checkbox name=chkitalic value="I"
                     <?
                         echo (isset($_GET["chkitalic"])) ? " checked" : "";
                     ?>>Italic

              <input type=checkbox name=chkunderline value="B"
                     <?
                         echo (isset($_GET["chkunderline"])) ? " checked" : "";
                     ?>>Underline

              <input type=submit name=s1 vlaue="Submit">
        </form>
        <?
            $optag="";
            $cltag="";

            if(isset($_GET["chkbold"]))
            {
                $optag=$optag."<b>";
                $cltag="</b>".$cltag;
            }
            if(isset($_GET["chkitalic"]))
            {
                $optag=$optag."<i>";
                $cltag="</i>".$cltag;
            }
            if(isset($_GET["chkunderline"]))
            {
                $optag=$optag."<u>";
                $cltag="</u>".$cltag;
            }
            echo $optag."Welcome to RPBC".$cltag;
        ?>
        <br>Hi
        <br>Hello
  </body>
</html>