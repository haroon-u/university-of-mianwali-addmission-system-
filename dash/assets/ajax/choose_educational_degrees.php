<?php

$conn = mysqli_connect("localhost","root","","umw") or die("Connection Failed");

$sql = "SELECT * from form_education ";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = '<option selected value=""> Choose  </option>';
if(mysqli_num_rows($result) > 0 ){

                  while($row = mysqli_fetch_assoc($result))
                        {
                        
                          $output .= "<option value={$row["eid"]}>  {$row["ename"]}  </option>";
                        }


    mysqli_close($conn);

    echo $output;
}
else
{
    echo '<option selected value="">No Records Found</option>';
}

?>
