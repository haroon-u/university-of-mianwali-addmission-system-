<?php

$conn = mysqli_connect("localhost","root","","umw") or die("Connection Failed");

$tid=$_POST['tid'];
$tname=$_POST['tname'];

$sql = "UPDATE type_admisssion SET tname='$tname' WHERE tid='$tid'";
if (mysqli_query($conn, $sql)) {
    
    echo "Successfully Updated";
}
else
{
    echo "Unsuccessful in Updating";
}

//<option value=$row["pid"]> $row["pname"] (  $row["pdesc"])  </option>

?>
