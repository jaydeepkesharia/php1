<html>
    <head><title>Header Function</title></head>
    <body bgcolor=#aaffcc>

    <?
        header("Content-type: application/vnd.ms-excel");
        //header("Content-type: application/msword");
    ?>

        <table border=1>
               <tr>
                   <th>Employee Name</th>
                   <th>Salary</th>
               </tr>
               <tr>
                   <td>aaa</td>    <td>20000</td>
               </tr>
               <tr>
                   <td>yuv</td>    <td>25000</td>
               </tr>
               <tr>
                   <td>Total Salary</td>    <td>=b2+b3</td>
               </tr>
        </table>
    </body>
</html>