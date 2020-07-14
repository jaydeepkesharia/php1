<html>
    <head><title>Retrive Table Structure</title></head>
    <body bgcolor=orange>

    <?
        include("connect.php");
        $rs=mysql_query("select * from userprofile");

        echo "<table border=1>";
        echo "<tr><th>Field Name</th><th>Type</th><th>Size</th><th>Attributes</th></tr>";

        for($i=0;$i<mysql_num_fields($rs);$i++)
        {
            echo "<tr>";
            echo "<td>".mysql_field_name($rs,$i)."</td>";
            echo "<td>".mysql_field_type($rs,$i)."</td>";
            echo "<td>".mysql_field_len($rs,$i)."</td>";
            echo "<td>".mysql_field_flags($rs,$i)."</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>

    </body>
</html>