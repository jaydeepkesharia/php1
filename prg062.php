<html>
    <head><title>Retrive Tables</title></head>
    <body bgcolor=#aa5543>

    <?
        include_once("connect.php");
        $rs=mysql_list_tables("bca06_24");
        while($v=mysql_fetch_array($rs))
        {
            echo "<br>Table: ".$v[0];
        }
    ?>

    </body>
</html>