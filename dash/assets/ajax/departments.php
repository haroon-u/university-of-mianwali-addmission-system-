<?php

$conn = mysqli_connect("localhost","root","","umw") or die("Connection Failed");

$sql = "SELECT * from departments";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = '';
if(mysqli_num_rows($result) > 0 ){
    $output .= '<h5 class="text-center mt-5">Select departments in Which this degree holder can apply</h5><hr>';

                  while ($get=mysqli_fetch_assoc($result)) 
                    {
                        
                            $output .= '<div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="dept'.$get["dept_id"].'"
                                          name="dept'.$get["dept_id"].'" value="'.$get["dept_id"].'">
                                          <label class="form-check-label" for="gridCheck1">
                                            '.$get["dept_name"].'
                                          </label>
                                        </div>';
                
                        
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
