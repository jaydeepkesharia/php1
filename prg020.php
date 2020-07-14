<html>
  <head> <title>Date Combo</title> </head>
  <body bgcolor="#FFFFFF">
        Birth Date :-
        <select name=cmbday>
                <?
                    for($i=1;$i<=31;$i++)
                    {
                        echo "<option>$i</option>";
                    }
                ?>
        </select>
        <select name=cmbmonth>
                <?
                    $i=1;
                    while($i<=12)
                    {
                        echo "<option>$i</option>";
                        $i++;
                    }
                ?>
        </select>
        <select name=cmbyear>
                <?
                    $i=1950;
                    do
                    {
                        echo "<option>$i</option>";
                        $i++;
                    }while($i<=2050);
                ?>
        </select>
  </body>
</html>