<html>
  <head>
      <title>Welcome to R.P.B.C.</title>
  </head>
  <body bgcolor=pink>
        <?
            $uname="anil";
            $pwd="abc";
        ?>
        <b>User Account Details : </b>
        <br>
        <?
            echo "User Name := ".$uname;
            echo "<br>User Password :=$pwd";
        ?>
        <br><br>
        <b>User Account Details :</b>

        <br>User Name := <? echo $uname ?>
        <br>User Password := <?= $pwd ?>
  </body>
</html>