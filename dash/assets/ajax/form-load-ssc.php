<?php

$conn = mysqli_connect("localhost","root","","umw") or die("Connection Failed");

$cid = $_POST['cid'];

$query = "SELECT cname FROM certificates WHERE cid=$cid";
$cname = mysqli_query($conn, $query) or die("SQL Query Failed.");
$search = mysqli_fetch_assoc($cname);
$search = $search["cname"];

$sql = "SELECT * from form_education WHERE cname='$search'";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = '<option selected value=""> Choose  </option>';
if(mysqli_num_rows($result) > 0 ){

                  while($row = mysqli_fetch_assoc($result))
                        {
                        
                          $output .= "<option value={$row["eid"]}> {$row["ename"]}  </option>";
                        }

                    //$output .= "<option >$search  </option>";

    mysqli_close($conn);

    echo $output;
}
else
{
    echo '<option selected value="">No Records Found</option>';
}

//<option value=$row["pid"]> $row["pname"] (  $row["pdesc"])  </option>

?>
