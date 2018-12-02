<!DOCTYPE HTML>
<html>
    <head>
        <title>Program-10</title>
        <style>
            th,tr,td,table
            {
                border: 1 px solid black;
                border-collapse: collapse;
                text-align: center;
                background-color: lightblue;
                width: 33%;
            }
            table
            {
                margin: auto;
            }
        </style>
    </head>
    <body>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "Ununseptium117";
        $dbname = "cs017";
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        if($conn->connect_error)
            die("Connection to server failed".$conn->connect_error);
        $a=array();
        $sql="select * from student;";
        $result=$conn->query($sql);
        if($result->num_rows>0)
        {
            echo "<br>";
            echo "<h4 align='center''>Before sorting</h3>";
            echo "<table border='2'>";
            echo "<tr><th>USN</th><th>Name</th><th>Address</th></tr>";
            
            while($row=$result->fetch_assoc())
            {
                echo "<tr>";
                echo "<td>".$row["usn"]."</td>";
                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["addr"]."</td></tr>";
                array_push($a,$row["usn"]);
            }
            echo "</table>";
        }
        else
        {
            echo "table is empty";
        }
            
            $n=count($a);
            $b=$a;
            for($i=0;$i<$n;$i++)
            {
                
                for($j=$i+1;$j<$n;$j++)
                {
                    if($a[$i]>$a[$j])
                    {
                        $temp=$a[$i];
                        $a[$i]=$a[$j];
                        $a[$j]=$temp;
                    }
                }
            }
            
            $c=array();
            $d=array();
            $result=$conn->query($sql);
            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                {
                    for($i=0;$i<$n;$i++)
                    {
                         if($a[$i]==$row["usn"])
                         {
                             $c[$i]=$row["name"];
                             $d[$i]=$row["addr"];
                         }
                        
                    }
                    
                   
                }
            }
        echo "<br>";
         echo "<h4 align='center'>After sorting</h3>";
            echo "<table border='2'>";
            echo "<tr><th>USN</th><th>Name</th><th>Address</th></tr>";
        for($i=0;$i<$n;$i++)
        {
            echo "<tr><td>".$a[$i]."</td>";
            echo "<td>".$c[$i]."</td>";
            echo "<td>".$d[$i]."</td>";
            echo "</tr>";
            
        }
        echo "</table>";
        $conn->close();
        
        ?>
    </body>
    
</html>