<html>
  <head> <title>All Controls Data passed</title> </head>
  <body bgcolor="#FFFFFF">
       <?
            $title=$_POST["txttitle"];
            $des=$_POST["txtdescription"];
            $font=$_POST["cmbfont"];
            $color=isset($_POST["optcolor"]) ? $_POST["optcolor"] : "";

            $optag="";
            $cltag="";
            if(isset($_POST["chkbold"]))
            {
                $optag=$optag."<b>";
                $cltag="</b>".$cltag;
            }
            if(isset($_POST["chkitalic"]))
            {
                $optag=$optag."<i>";
                $cltag="</i>".$cltag;
            }
            if(isset($_POST["chkunderline"]))
            {
                $optag=$optag."<u>";
                $cltag="</u>".$cltag;
            }

            //echo "<font face=$cmbfont color=$color >".$optag.strtoupper($title).$cltag."</font>";
            echo "$optag<font face=$font color=$color>".strtoupper($title)."</font>$cltag";
            echo "<br><font face=$font color=$color>".$des."</font>";
        ?>
  </body>
</html>