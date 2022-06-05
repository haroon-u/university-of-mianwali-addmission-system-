<?php

$conn = mysqli_connect("localhost","root","","umw") or die("Connection Failed");

$tid = $_POST['tid'];
$sql = "DELETE FROM type_admisssion WHERE tid='$tid'";


if (mysqli_query($conn, $sql)) {
    
    echo "Successfully Deleted";
}
else
{
    echo "Unsuccessful in Deleting";
}

//<option value=$row["pid"]> $row["pname"] (  $row["pdesc"])  </option>

?>
