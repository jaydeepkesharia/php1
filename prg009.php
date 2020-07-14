<HTML>
  <HEAD>
      <TITLE>Data Passing using POST Method</TITLE>
  </HEAD>
  <body BGCOLOR="#FFFFFF">
        <?
            //set FORM tag attributes ACTION=prg009.php MEHTOD=post in prg007.php file.
            echo "POST Method";
            $uname=$_POST["txtusername"];
            $pwd=$_POST["txtpassword"];
            echo "<br>User Name := ".$uname;
            echo "<br>User Password := $pwd";
        ?>
  </BODY>
</HTML>