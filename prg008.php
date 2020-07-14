<HTML>
  <HEAD>
      <TITLE>Data Passing using GET Method</TITLE>
  </HEAD>
  <body BGCOLOR="#FFFFFF">
        <?
            //set FORM tag attributes ACTION=prg008.php MEHTOD=get in prg007.php file.
            echo "GET Method";
            $uname=$_GET["txtusername"];
            $pwd=$_GET["txtpassword"];
            echo "<br>User Name := ".$uname;
            echo "<br>User Password := $pwd";
        ?>
  </BODY>
</HTML>