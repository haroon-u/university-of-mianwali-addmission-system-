<?php

$conn = mysqli_connect("localhost","root","","umw") or die("Connection Failed");

$tname=$_POST['sname'];
$q3="INSERT INTO type_admisssion (tname) VALUES ('$tname')";

    if(mysqli_query($conn,$q3))
    {
        echo "Data Inserted Successfully";
    }
    else
    {
         echo "Data Inserted Successfully";
    }

//<option value=$row["pid"]> $row["pname"] (  $row["pdesc"])  </option>

?>
