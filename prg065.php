<html>
    <head><title>Movement of Record Pointer</title></head>
    <body bgcolor=orange>

    <?
        include("connect.php");
        $rs=mysql_query("select * from userprofile");
        
        echo "<br>Total Records := ".mysql_num_rows($rs);
        $obj=mysql_fetch_field($rs);

        echo "<pre>";
        print_r($obj);
        echo "</pre>";

        mysql_field_seek($rs,4);    //Pointer set on fifth no. field
        $obj=mysql_fetch_field($rs);  //fetch the field information & return object variable

        echo "<pre>";
        print_r($obj);
        echo "</pre>";

    ?>

    </body>
</html>