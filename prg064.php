<html>
    <head><title>Movement of Record Pointer</title></head>
    <body bgcolor=orange>

    <?
        include("connect.php");
        $rs=mysql_query("select * from userlist");
        
        echo "<br>Total Records := ".mysql_num_rows($rs);

        for($i=0;$i<mysql_num_rows($rs);$i++)
        {
            mysql_data_seek($rs,$i);
            $v=mysql_fetch_assoc($rs);
            echo "<br>";
            print_r($v);
        }
    ?>

    </body>
</html>