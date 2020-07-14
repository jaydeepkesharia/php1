<html>
  <head> <title>All Controls</title> </head>
  <body bgcolor="#FFFFFF">
        <form action="prg024.php" method=post>
              <table border=1>
                     <tr>
                         <td>Title :</td>
                         <td><input type=text name=txttitle></td>
                     </tr>
                     <tr>
                         <td>Description :</td>
                         <td><textarea name=txtdescription></textarea></td>
                     </tr>
                     <tr>
                         <td>Font :</td>
                         <td>
                             <select name=cmbfont>
                                     <option>Monotype Corsiva</option>
                                     <option>Impact</option>
                                     <option>Comic Sans MS</option>
                             </select>
                         </td>
                     </tr>
                     <tr>
                         <td>Color :</td>
                         <td>
                             <input type=radio name=optcolor value="red">RED
                             <input type=radio name=optcolor value="green">GREEN
                             <input type=radio name=optcolor value="blue">BLUE
                         </td>
                     </tr>
                     <tr>
                         <td>Style</td>
                         <td>
                             <input type=checkbox name=chkbold value="B">BOLD
                             <input type=checkbox name=chkitalic value="I">ITALIC
                             <input type=checkbox name=chkunderline value="U">UNDERLINE
                         </td>
                     </tr>
                     <tr>
                         <td align=center colspan=2>
                             <input type=submit name=s1 value="Submit">
                             <input type=reset name=r1 value="Cancel">
                         </td>
                     </tr>
              </table>
        </form>
  </body>
</html>