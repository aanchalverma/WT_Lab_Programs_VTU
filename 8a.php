<!DOCTYPE HTML>
<html>
    <head>
        <style>
            table,th,td,tr
            {
                text-align: center;
                border: 1px solid black;
                background-color: darkgray;
                border-collapse: collapse;
                width: 33%;
            }
            table
            {
                margin: auto;
            
            }
            input,p
            {
                text-align: right;
            }
        </style>
    </head>
    <body>
        <form method = "post">
            <table>
                <tr><caption><h3>Simple calculator</h3></caption></tr>
                <tr>
                    <td>Value1</td>
                    <td><input type="text" name="val1" value="0" /></td>
                    <td rowspan="2"> <input type="submit" name="sub" value="calculate"/></td>
                </tr>
                <tr>
                    <td>Value2</td>
                    <td><input type="text" name="val2" value="0" /></td>
                    
                </tr>
                    
            
        </form>
        
        <?php
        
        if(isset($_POST['sub']))
        {
            $val1=$_POST['val1'];
                $val2=$_POST['val2'];
            if (is_numeric($val1) and is_numeric($val2))
            {
                
                echo "<tr><td>Addition:</td><td>".($val1+$val2)."</td></tr>";
                 echo "<tr><td>Subtraction:</td><td>".($val1-$val2)."</td></tr>";
                 echo "<tr><td>Multiplication:</td><td>".$val1*$val2."</td></tr>";
                 echo "<tr><td>Division:</td><td>".$val1/$val2."</td></tr>";
                echo "</table>";
            }
            else
            {
                echo "<script type='text/javascript'>alert('Enter a valid number')</script>";
            }
        }
        
        
        ?>
        
        
    </body>
</html>