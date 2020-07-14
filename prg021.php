<html>
  <head> <title>Date Combo</title> </head>
  <body bgcolor="#FFFFFF">
        Birth Date :-
        <select name=cmbday>
                <?
                    for($i=1;$i<=31;$i++)
                    {
                        if($i==date("d"))
                        {
                            echo "<option selected>$i</option>";
                        }
                        else
                        {
                            echo "<option>$i</option>";
                        }
                    }
                ?>
        </select>
        <select name=cmbmonth>
                <?
                    for($i=1;$i<=12;$i++)
                    {
                        if($i==date("n"))
                        {
                            echo "<option selected>$i</option>";
                        }
                        else
                        {
                            echo "<option>$i</option>";
                        }
                    }
                ?>
        </select>
        <select name=cmbyear>
                <?
                    for($i=1950;$i<=2050;$i++)
                    {
                        if($i==date("Y"))
                        {
                            echo "<option selected>$i</option>";
                        }
                        else
                        {
                            echo "<option>$i</option>";
                        }
                    }
                ?>
        </select>
  </body>
</html>