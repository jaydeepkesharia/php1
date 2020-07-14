<html>
    <head><title>Database List</title></head>
    <body bgcolor=#237656>

    <?
        include("connect.php");
        $rs=mysql_list_dbs();
        while($v=mysql_fetch_array($rs))
        {
            echo "<br>".$v[0];
        }
    ?>

    </body>
</html>