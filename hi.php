<?php
$sn="localhost";
$un="gana";
$pw="gana";
$db="std";


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $rno=$_POST["rno"];
    $gen=$_POST["gen"];
     
    $con=new mysqli($sn,$un,$pw,$db);

    if($con->connect_error)
    {
        echo "Connecton failed to database";
    }
    else
    {
        $ret="select rno,nm,br,g1,g2,g3,g4,g5,s1,s2,s3,s4,s5,p1,p2,p3,p4,p5 from ress where rno='$rno' and gen='$gen'";
        $q=$con->query($ret);
        if($q->num_rows >0)
        {
            $row = $q->fetch_assoc();
            
                
echo "

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Result</title>
    <link rel='stylesheet' href='styles.css'>
</head>
<body>
    <DIV class='CON'>


    <img src='github.jpg' alt='college logo'>

    <div class='head'>
    <h3>ROLL NO       : ".$row['rno']."  </h3>
    <h3>NAME          : ".$row['nm']."  </h3> 
    <h3>PROGRAM        : B.TECH in ".$row['br']."  </h3>
    </div>
    <hr>
    <br>
    <table>


        <tr>
            <th>SUBJECTS</th>
            <th>GRADE</th>
            <th>STATUS</th>
            <th>CREDITS</th>
        </tr>
        <tr>
            <td>ENGLISH</td>
            <td>".$row['g1']." </td>
            <td>".$row['p1']." </td>
            <td>3.0</td>
        </tr>
        <tr>
            <td>M1</td>
            <td>".$row['g2']." </td>
            <td>".$row['p2']." </td>
            <td>3.0</td>
        </tr>
        <tr>
            <td>CHEMISTRY</td>
            <td>".$row['g3']." </td>
            <td>".$row['p3']." </td>
            <td>3.0</td>
        </tr>
        <tr>
            <td>C LANGUAGES</td>
            <td>".$row['g4']." </td>
            <td>".$row['p4']." </td>
            <td>3.0</td>
        </tr>
        <tr>
            <td>WORK SHOP</td>
            <td>".$row['g5']." </td>
            <td>".$row['p5']." </td>
            <td>3.0</td>
        </tr>


    </table>






    </DIV>
</body>
</html>

";     



            }
            else
            {
                echo "invalid details";
            }
        }

    
}







?>